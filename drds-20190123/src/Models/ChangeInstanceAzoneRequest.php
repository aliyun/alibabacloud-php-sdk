<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;

class ChangeInstanceAzoneRequest extends Model
{
    /**
     * @var bool
     */
    public $changeVSwitch;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $drdsRegionId;

    /**
     * @var string
     */
    public $newVSwitch;

    /**
     * @var string
     */
    public $originAzoneId;

    /**
     * @var string
     */
    public $targetAzoneId;
    protected $_name = [
        'changeVSwitch' => 'ChangeVSwitch',
        'drdsInstanceId' => 'DrdsInstanceId',
        'drdsRegionId' => 'DrdsRegionId',
        'newVSwitch' => 'NewVSwitch',
        'originAzoneId' => 'OriginAzoneId',
        'targetAzoneId' => 'TargetAzoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
