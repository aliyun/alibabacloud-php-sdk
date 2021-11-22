<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListServiceEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class serviceEntries extends Model
{
    /**
     * @var string
     */
    public $serviceEntryDescription;

    /**
     * @var string
     */
    public $serviceEntryId;

    /**
     * @var string
     */
    public $serviceEntryName;

    /**
     * @var string
     */
    public $serviceEntryStatus;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'serviceEntryDescription' => 'ServiceEntryDescription',
        'serviceEntryId'          => 'ServiceEntryId',
        'serviceEntryName'        => 'ServiceEntryName',
        'serviceEntryStatus'      => 'ServiceEntryStatus',
        'serviceId'               => 'ServiceId',
        'target'                  => 'Target',
        'targetType'              => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceEntryDescription) {
            $res['ServiceEntryDescription'] = $this->serviceEntryDescription;
        }
        if (null !== $this->serviceEntryId) {
            $res['ServiceEntryId'] = $this->serviceEntryId;
        }
        if (null !== $this->serviceEntryName) {
            $res['ServiceEntryName'] = $this->serviceEntryName;
        }
        if (null !== $this->serviceEntryStatus) {
            $res['ServiceEntryStatus'] = $this->serviceEntryStatus;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceEntryDescription'])) {
            $model->serviceEntryDescription = $map['ServiceEntryDescription'];
        }
        if (isset($map['ServiceEntryId'])) {
            $model->serviceEntryId = $map['ServiceEntryId'];
        }
        if (isset($map['ServiceEntryName'])) {
            $model->serviceEntryName = $map['ServiceEntryName'];
        }
        if (isset($map['ServiceEntryStatus'])) {
            $model->serviceEntryStatus = $map['ServiceEntryStatus'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
