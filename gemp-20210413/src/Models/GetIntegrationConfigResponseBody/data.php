<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetIntegrationConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 集成配置id、
     *
     * @var int
     */
    public $integrationConfigId;

    /**
     * @description 监控源id
     *
     * @var int
     */
    public $monitorSourceId;

    /**
     * @description 监控源名称
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @description 监控源简称
     *
     * @var string
     */
    public $monitorSourceShortName;

    /**
     * @description 集成秘钥
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description 是否接收报警
     *
     * @var bool
     */
    public $isReceivedEvent;

    /**
     * @description 集成配置状态，DISABLE 禁用，INTEGRATED 已集成，UNINTEGRATED未集成
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'integrationConfigId'    => 'integrationConfigId',
        'monitorSourceId'        => 'monitorSourceId',
        'monitorSourceName'      => 'monitorSourceName',
        'monitorSourceShortName' => 'monitorSourceShortName',
        'accessKey'              => 'accessKey',
        'isReceivedEvent'        => 'isReceivedEvent',
        'status'                 => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->integrationConfigId) {
            $res['integrationConfigId'] = $this->integrationConfigId;
        }
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
        }
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
        }
        if (null !== $this->monitorSourceShortName) {
            $res['monitorSourceShortName'] = $this->monitorSourceShortName;
        }
        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }
        if (null !== $this->isReceivedEvent) {
            $res['isReceivedEvent'] = $this->isReceivedEvent;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['integrationConfigId'])) {
            $model->integrationConfigId = $map['integrationConfigId'];
        }
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }
        if (isset($map['monitorSourceShortName'])) {
            $model->monitorSourceShortName = $map['monitorSourceShortName'];
        }
        if (isset($map['accessKey'])) {
            $model->accessKey = $map['accessKey'];
        }
        if (isset($map['isReceivedEvent'])) {
            $model->isReceivedEvent = $map['isReceivedEvent'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
