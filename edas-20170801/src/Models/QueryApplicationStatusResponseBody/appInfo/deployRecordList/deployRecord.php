<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\deployRecordList;

use AlibabaCloud\Tea\Model;

class deployRecord extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $deployRecordId;

    /**
     * @var string
     */
    public $eccId;

    /**
     * @var string
     */
    public $ecuId;

    /**
     * @var string
     */
    public $packageMd5;

    /**
     * @var string
     */
    public $packageVersionId;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'deployRecordId'   => 'DeployRecordId',
        'eccId'            => 'EccId',
        'ecuId'            => 'EcuId',
        'packageMd5'       => 'PackageMd5',
        'packageVersionId' => 'PackageVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deployRecordId) {
            $res['DeployRecordId'] = $this->deployRecordId;
        }
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }
        if (null !== $this->packageMd5) {
            $res['PackageMd5'] = $this->packageMd5;
        }
        if (null !== $this->packageVersionId) {
            $res['PackageVersionId'] = $this->packageVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeployRecordId'])) {
            $model->deployRecordId = $map['DeployRecordId'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }
        if (isset($map['PackageMd5'])) {
            $model->packageMd5 = $map['PackageMd5'];
        }
        if (isset($map['PackageVersionId'])) {
            $model->packageVersionId = $map['PackageVersionId'];
        }

        return $model;
    }
}
