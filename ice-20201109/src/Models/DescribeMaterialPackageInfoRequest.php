<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeMaterialPackageInfoRequest extends Model
{
    /**
     * @var string
     */
    public $materialPackageId;

    /**
     * @var string
     */
    public $materialPackageType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'materialPackageId'   => 'MaterialPackageId',
        'materialPackageType' => 'MaterialPackageType',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialPackageId) {
            $res['MaterialPackageId'] = $this->materialPackageId;
        }
        if (null !== $this->materialPackageType) {
            $res['MaterialPackageType'] = $this->materialPackageType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMaterialPackageInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialPackageId'])) {
            $model->materialPackageId = $map['MaterialPackageId'];
        }
        if (isset($map['MaterialPackageType'])) {
            $model->materialPackageType = $map['MaterialPackageType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
