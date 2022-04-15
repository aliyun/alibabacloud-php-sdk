<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class TotalQueryResourcePackageRequest extends Model
{
    /**
     * @description 请求操作人Id
     *
     * @var string
     */
    public $operatorId;

    /**
     * @description 请求操作人类型
     *
     * @var string
     */
    public $operatorType;

    /**
     * @description 资源包类型,PackageType[CU(cu),code,cssResourceType,desc]
     *
     * @var string
     */
    public $packageType;
    protected $_name = [
        'operatorId'   => 'OperatorId',
        'operatorType' => 'OperatorType',
        'packageType'  => 'PackageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TotalQueryResourcePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        return $model;
    }
}
