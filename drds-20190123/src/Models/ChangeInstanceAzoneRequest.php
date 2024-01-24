<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ChangeInstanceAzoneRequest extends Model
{
    /**
     * @var bool
     */
    public $changeVSwitch;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drdsjiii1b49****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $drdsRegionId;

    /**
     * @var string
     */
    public $newVSwitch;

    /**
     * @description The source zone of the PolarDB-X 1.0 instance.
     *
     * @example cn-hangzhou-B
     *
     * @var string
     */
    public $originAzoneId;

    /**
     * @description The destination zone to which you want to modify
     *
     * @example cn-hangzhou-A
     *
     * @var string
     */
    public $targetAzoneId;
    protected $_name = [
        'changeVSwitch'  => 'ChangeVSwitch',
        'drdsInstanceId' => 'DrdsInstanceId',
        'drdsRegionId'   => 'DrdsRegionId',
        'newVSwitch'     => 'NewVSwitch',
        'originAzoneId'  => 'OriginAzoneId',
        'targetAzoneId'  => 'TargetAzoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeVSwitch) {
            $res['ChangeVSwitch'] = $this->changeVSwitch;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->drdsRegionId) {
            $res['DrdsRegionId'] = $this->drdsRegionId;
        }
        if (null !== $this->newVSwitch) {
            $res['NewVSwitch'] = $this->newVSwitch;
        }
        if (null !== $this->originAzoneId) {
            $res['OriginAzoneId'] = $this->originAzoneId;
        }
        if (null !== $this->targetAzoneId) {
            $res['TargetAzoneId'] = $this->targetAzoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeInstanceAzoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeVSwitch'])) {
            $model->changeVSwitch = $map['ChangeVSwitch'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['DrdsRegionId'])) {
            $model->drdsRegionId = $map['DrdsRegionId'];
        }
        if (isset($map['NewVSwitch'])) {
            $model->newVSwitch = $map['NewVSwitch'];
        }
        if (isset($map['OriginAzoneId'])) {
            $model->originAzoneId = $map['OriginAzoneId'];
        }
        if (isset($map['TargetAzoneId'])) {
            $model->targetAzoneId = $map['TargetAzoneId'];
        }

        return $model;
    }
}
