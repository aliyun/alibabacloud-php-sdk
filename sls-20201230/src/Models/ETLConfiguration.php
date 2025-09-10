<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ETLConfiguration extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $script;

    /**
     * @var ETLConfigurationSink[]
     */
    public $sinks;

    /**
     * @var int
     */
    public $toTime;
    protected $_name = [
        'accessKeyId' => 'accessKeyId',
        'accessKeySecret' => 'accessKeySecret',
        'fromTime' => 'fromTime',
        'lang' => 'lang',
        'logstore' => 'logstore',
        'parameters' => 'parameters',
        'roleArn' => 'roleArn',
        'script' => 'script',
        'sinks' => 'sinks',
        'toTime' => 'toTime',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->sinks)) {
            Model::validateArray($this->sinks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->accessKeySecret) {
            $res['accessKeySecret'] = $this->accessKeySecret;
        }

        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }

        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }

        if (null !== $this->script) {
            $res['script'] = $this->script;
        }

        if (null !== $this->sinks) {
            if (\is_array($this->sinks)) {
                $res['sinks'] = [];
                $n1 = 0;
                foreach ($this->sinks as $item1) {
                    $res['sinks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
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
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }

        if (isset($map['accessKeySecret'])) {
            $model->accessKeySecret = $map['accessKeySecret'];
        }

        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }

        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        if (isset($map['script'])) {
            $model->script = $map['script'];
        }

        if (isset($map['sinks'])) {
            if (!empty($map['sinks'])) {
                $model->sinks = [];
                $n1 = 0;
                foreach ($map['sinks'] as $item1) {
                    $model->sinks[$n1] = ETLConfigurationSink::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        return $model;
    }
}
