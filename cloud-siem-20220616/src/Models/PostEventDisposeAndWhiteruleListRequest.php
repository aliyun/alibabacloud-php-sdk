<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class PostEventDisposeAndWhiteruleListRequest extends Model
{
    /**
     * @example [
     * "scope": [
     * "176618589410****"
     * {
     * "instanceId": "waf-cn-n6w1oy1****",
     * "domains": [
     * "lmfip.wafqax.***"
     * ]
     * @var string
     */
    public $eventDispose;

    /**
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @example {
     * }
     * @var string
     */
    public $receiverInfo;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example dealed
     *
     * @var string
     */
    public $remark;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'eventDispose' => 'EventDispose',
        'incidentUuid' => 'IncidentUuid',
        'receiverInfo' => 'ReceiverInfo',
        'regionId'     => 'RegionId',
        'remark'       => 'Remark',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventDispose) {
            $res['EventDispose'] = $this->eventDispose;
        }
        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }
        if (null !== $this->receiverInfo) {
            $res['ReceiverInfo'] = $this->receiverInfo;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostEventDisposeAndWhiteruleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventDispose'])) {
            $model->eventDispose = $map['EventDispose'];
        }
        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }
        if (isset($map['ReceiverInfo'])) {
            $model->receiverInfo = $map['ReceiverInfo'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
