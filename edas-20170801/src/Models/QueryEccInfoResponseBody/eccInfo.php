<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryEccInfoResponseBody;

use AlibabaCloud\Tea\Model;

class eccInfo extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example e809****-43d7-4c6b-8e01-b0d9d1db****
     *
     * @var string
     */
    public $appId;

    /**
     * @description ECC ID
     *
     * @example a5b9****-40b4-4d7b-9c2a-55d6c1c0****
     *
     * @var string
     */
    public $eccId;

    /**
     * @description ECU ID
     *
     * @example 0d4e****-6d87-401f-ba81-13df9877****
     *
     * @var string
     */
    public $ecuId;

    /**
     * @description The ID of the ECC group.
     *
     * @example 57cd****-2d3b-496f-bcce-646d0a4d****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the ECC group.
     *
     * @example _DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The MD5 hash value of the deployment package version.
     *
     * @example bab6****7a090e41ca9445c9b3cd****
     *
     * @var string
     */
    public $packageMd5;

    /**
     * @description The version of the deployment package.
     *
     * @example 20210209.153400
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @description VPC ID
     *
     * @example vpc-23727****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'appId'          => 'AppId',
        'eccId'          => 'EccId',
        'ecuId'          => 'EcuId',
        'groupId'        => 'GroupId',
        'groupName'      => 'GroupName',
        'packageMd5'     => 'PackageMd5',
        'packageVersion' => 'PackageVersion',
        'vpcId'          => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->packageMd5) {
            $res['PackageMd5'] = $this->packageMd5;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eccInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['PackageMd5'])) {
            $model->packageMd5 = $map['PackageMd5'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
