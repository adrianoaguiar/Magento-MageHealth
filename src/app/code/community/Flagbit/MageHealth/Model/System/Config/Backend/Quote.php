<?php

class Flagbit_MageHealth_Model_System_Config_Backend_Quote extends Flagbit_MageHealth_Model_System_Config_Backend_Abstract
{
    const CRON_STRING_PATH  = 'crontab/jobs/magehealth_quote_clean/schedule/cron_expr';
    const CRON_MODEL_PATH   = 'crontab/jobs/magehealth_quote_clean/run/model';


    /**
     * get status
     *
     * @return boolean
     */
    protected function _getIsEnabled()
    {
        return $this->getData('groups/quote/fields/enabled/value');
    }

    /**
     * get Time
     *
     * @return array
     */
    protected function _getTime()
    {
        return $this->getData('groups/quote/fields/time/value');
    }

    /**
     * get frequency
     *
     * @return string
     */
    protected function _getFrequency()
    {
        return $this->getData('groups/quote/fields/frequency/value');
    }

    /**
     * get config xpath to cron string
     *
     * @return string
     */
    protected function _getCronStringPath()
    {
        return self::CRON_STRING_PATH;
    }

    /**
     * get config xpath to cron model
     *
     * @return string
     */
    protected function _getCronModelPath()
    {
        return self::CRON_MODEL_PATH;
    }
}
