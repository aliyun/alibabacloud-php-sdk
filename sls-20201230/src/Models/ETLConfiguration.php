<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ETLConfiguration extends Model
{
    /**
     * @deprecated
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @deprecated
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * @description This parameter is required.
     *
     * @example 1714274900
     *
     * @var int
     */
    public $fromTime;

    /**
     * @description This parameter is required.
     *
     * @example test-logstore
     *
     * @var string
     */
    public $logstore;

    /**
     * @example config.vpc.vpc_id.test1：vpc-uf6mskb0b****n9yj
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description This parameter is required.
     *
     * @example acs:ram::13234:role/logtarget
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description This parameter is required.
     *
     * @example e_set("key","value")
     *
     * @var string
     */
    public $script;

    /**
     * @description This parameter is required.
     *
     * @var ETLConfigurationSink[]
     */
    public $sinks;

    /**
     * @description This parameter is required.
     *
     * @example 1714274970
     *
     * @var int
     */
    public $toTime;
    protected $_name = [
        'accessKeyId'     => 'accessKeyId',
        'accessKeySecret' => 'accessKeySecret',
        'fromTime'        => 'fromTime',
        'logstore'        => 'logstore',
        'parameters'      => 'parameters',
        'roleArn'         => 'roleArn',
        'script'          => 'script',
        'sinks'           => 'sinks',
        'toTime'          => 'toTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->script) {
            $res['script'] = $this->script;
        }
        if (null !== $this->sinks) {
            $res['sinks'] = [];
            if (null !== $this->sinks && \is_array($this->sinks)) {
                $n = 0;
                foreach ($this->sinks as $item) {
                    $res['sinks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ETLConfiguration
     */
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
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
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
                $n            = 0;
                foreach ($map['sinks'] as $item) {
                    $model->sinks[$n++] = null !== $item ? ETLConfigurationSink::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        return $model;
    }
}
