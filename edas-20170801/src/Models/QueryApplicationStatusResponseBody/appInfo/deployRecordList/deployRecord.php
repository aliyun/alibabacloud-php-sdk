<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\deployRecordList;

use AlibabaCloud\Tea\Model;

class deployRecord extends Model
{
    /**
     * @description The time when the deployment record was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573626226691
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the deployment record.
     *
     * @example bbc6c0d5-d792-4907-****-************
     *
     * @var string
     */
    public $deployRecordId;

    /**
     * @description The unique ID of the ECC.
     *
     * @example 0cf49a6c-95a8-4aa8-****-************
     *
     * @var string
     */
    public $eccId;

    /**
     * @description The unique ID of the ECU.
     *
     * @example 07bd417a-b863-477d-****-************
     *
     * @var string
     */
    public $ecuId;

    /**
     * @description The MD5 hash value of the deployment package.
     *
     * @example d0db5bcb442e492104d0f00e10a03dd9
     *
     * @var string
     */
    public $packageMd5;

    /**
     * @description The version of the deployment package that was used to deploy an application in the instance group.
     *
     * @example 441beb18-da42-44dc-****-************
     *
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
