<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class SendDryRunSystemEventRequest extends Model
{
    /**
     * @description The content of the system event.
     *
     * >  The value of this parameter is a JSON object. We recommend that you include the `product`, `resourceId`, and `regionId` fields in the JSON object.
     * @example {"product":"CloudMonitor","resourceId":"acs:ecs:cn-hongkong:173651113438****:instance/{instanceId}","level":"CRITICAL","instanceName":"instanceName","regionId":"cn-hangzhou","name":"Agent_Status_Stopped","content":{"ipGroup":"0.0.0.0,0.0.0.1","tianjimonVersion":"1.2.11"},"status":"stopped"}
     *
     * @var string
     */
    public $eventContent;

    /**
     * @description The name of the system event.
     *
     * >  For more information, see [DescribeSystemEventMetaList](~~114972~~).
     * @example Agent_Status_Stopped
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The ID of the application group.
     *
     * @example 123456
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the cloud service.
     *
     * >  For information about the system events supported by Cloud Monitor for Alibaba Cloud services, see [System events](~~167388~~).
     * @example ecs
     *
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'eventContent' => 'EventContent',
        'eventName'    => 'EventName',
        'groupId'      => 'GroupId',
        'product'      => 'Product',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventContent) {
            $res['EventContent'] = $this->eventContent;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendDryRunSystemEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventContent'])) {
            $model->eventContent = $map['EventContent'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
