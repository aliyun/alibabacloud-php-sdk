<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class BindImagePackageRequest extends Model
{
    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $imagePackageInstanceId;
    protected $_name = [
        'ecsInstanceId'          => 'EcsInstanceId',
        'imagePackageInstanceId' => 'ImagePackageInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->imagePackageInstanceId) {
            $res['ImagePackageInstanceId'] = $this->imagePackageInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindImagePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['ImagePackageInstanceId'])) {
            $model->imagePackageInstanceId = $map['ImagePackageInstanceId'];
        }

        return $model;
    }
}
