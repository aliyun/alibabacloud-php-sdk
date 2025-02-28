<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Logging extends Model
{
    /**
     * @var string
     */
    public $log4j2ConfigurationTemplate;
    /**
     * @var Log4jLogger[]
     */
    public $log4jLoggers;
    /**
     * @var LogReservePolicy
     */
    public $logReservePolicy;
    /**
     * @var string
     */
    public $loggingProfile;
    protected $_name = [
        'log4j2ConfigurationTemplate' => 'log4j2ConfigurationTemplate',
        'log4jLoggers'                => 'log4jLoggers',
        'logReservePolicy'            => 'logReservePolicy',
        'loggingProfile'              => 'loggingProfile',
    ];

    public function validate()
    {
        if (\is_array($this->log4jLoggers)) {
            Model::validateArray($this->log4jLoggers);
        }
        if (null !== $this->logReservePolicy) {
            $this->logReservePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->log4j2ConfigurationTemplate) {
            $res['log4j2ConfigurationTemplate'] = $this->log4j2ConfigurationTemplate;
        }

        if (null !== $this->log4jLoggers) {
            if (\is_array($this->log4jLoggers)) {
                $res['log4jLoggers'] = [];
                $n1                  = 0;
                foreach ($this->log4jLoggers as $item1) {
                    $res['log4jLoggers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logReservePolicy) {
            $res['logReservePolicy'] = null !== $this->logReservePolicy ? $this->logReservePolicy->toArray($noStream) : $this->logReservePolicy;
        }

        if (null !== $this->loggingProfile) {
            $res['loggingProfile'] = $this->loggingProfile;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['log4j2ConfigurationTemplate'])) {
            $model->log4j2ConfigurationTemplate = $map['log4j2ConfigurationTemplate'];
        }

        if (isset($map['log4jLoggers'])) {
            if (!empty($map['log4jLoggers'])) {
                $model->log4jLoggers = [];
                $n1                  = 0;
                foreach ($map['log4jLoggers'] as $item1) {
                    $model->log4jLoggers[$n1++] = Log4jLogger::fromMap($item1);
                }
            }
        }

        if (isset($map['logReservePolicy'])) {
            $model->logReservePolicy = LogReservePolicy::fromMap($map['logReservePolicy']);
        }

        if (isset($map['loggingProfile'])) {
            $model->loggingProfile = $map['loggingProfile'];
        }

        return $model;
    }
}
