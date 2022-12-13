<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1023
     *
     * @var int
     */
    public $integrationConfigId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isReceivedEvent;

    /**
     * @example 87
     *
     * @var int
     */
    public $monitorSourceId;

    /**
     * @example Zabbix
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @example Zabbix
     *
     * @var string
     */
    public $monitorSourceShortName;

    /**
     * @example NOT_INTEGRATED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'integrationConfigId'    => 'integrationConfigId',
        'isReceivedEvent'        => 'isReceivedEvent',
        'monitorSourceId'        => 'monitorSourceId',
        'monitorSourceName'      => 'monitorSourceName',
        'monitorSourceShortName' => 'monitorSourceShortName',
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
        if (null !== $this->isReceivedEvent) {
            $res['isReceivedEvent'] = $this->isReceivedEvent;
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
        if (isset($map['isReceivedEvent'])) {
            $model->isReceivedEvent = $map['isReceivedEvent'];
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
