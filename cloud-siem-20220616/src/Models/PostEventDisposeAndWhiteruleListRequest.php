<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class PostEventDisposeAndWhiteruleListRequest extends Model
{
    /**
     * @description The configuration of event handling. The value is a JSON object.
     *
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
     * @description The UUID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description The configuration of the alert recipient. The value is a JSON object.
     *
     * @example {
     * }
     * @var string
     */
    public $receiverInfo;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The remarks of the event.
     *
     * @example dealed
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the event. Valid values:
     *
     *   0: unhandled
     *   1: handing
     *   5: handling failed
     *   10: handled
     *
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
