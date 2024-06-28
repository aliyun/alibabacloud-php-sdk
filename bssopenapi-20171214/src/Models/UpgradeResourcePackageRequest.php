<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class UpgradeResourcePackageRequest extends Model
{
    /**
     * @description The time when the resource plan takes effect. If you leave this parameter empty, the resource plan immediately takes effect by default.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2020-02-02T12:00:00Z
     *
     * @var string
     */
    public $effectiveDate;

    /**
     * @description The ID of the resource plan.
     *
     * This parameter is required.
     * @example OSSBAG-cn-0xl*****x002
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The specifications to which you want to upgrade the resource plan.
     *
     * @example 51200
     *
     * @var string
     */
    public $specification;
    protected $_name = [
        'effectiveDate' => 'EffectiveDate',
        'instanceId'    => 'InstanceId',
        'ownerId'       => 'OwnerId',
        'specification' => 'Specification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveDate) {
            $res['EffectiveDate'] = $this->effectiveDate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeResourcePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveDate'])) {
            $model->effectiveDate = $map['EffectiveDate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        return $model;
    }
}
