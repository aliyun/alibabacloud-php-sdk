<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationGroupRequest extends Model
{
    /**
     * @description The application name.
     *
     * @example MyApplication
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example -
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the application group in CloudMonitor.
     *
     * @example 218026174
     *
     * @var string
     */
    public $cmsGroupId;

    /**
     * @description The ID of the region in which the related sources reside.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $deployRegionId;

    /**
     * @description The description of the application group.
     *
     * @example ApplicationGroup
     *
     * @var string
     */
    public $description;

    /**
     * @description The key of the tag. You must set both the ImportTagKey and the ImportTagValue parameters, or leave both of them empty. If you do not set the ImportTagKey and ImportTagValue parameters, the application name is used for this parameter by default.
     *
     * @example k1
     *
     * @var string
     */
    public $importTagKey;

    /**
     * @description The value of the tag. You must set both the ImportTagKey and the ImportTagValue parameters, or leave both of them empty. If you do not set the ImportTagKey and ImportTagValue parameters, the application group name is used for this parameter by default.
     *
     * @example v1
     *
     * @var string
     */
    public $importTagValue;

    /**
     * @description The name of the application group.
     *
     * @example MyApplicationGroup
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID. Set the value to cn-hangzhou.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'clientToken'     => 'ClientToken',
        'cmsGroupId'      => 'CmsGroupId',
        'deployRegionId'  => 'DeployRegionId',
        'description'     => 'Description',
        'importTagKey'    => 'ImportTagKey',
        'importTagValue'  => 'ImportTagValue',
        'name'            => 'Name',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->cmsGroupId) {
            $res['CmsGroupId'] = $this->cmsGroupId;
        }
        if (null !== $this->deployRegionId) {
            $res['DeployRegionId'] = $this->deployRegionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->importTagKey) {
            $res['ImportTagKey'] = $this->importTagKey;
        }
        if (null !== $this->importTagValue) {
            $res['ImportTagValue'] = $this->importTagValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CmsGroupId'])) {
            $model->cmsGroupId = $map['CmsGroupId'];
        }
        if (isset($map['DeployRegionId'])) {
            $model->deployRegionId = $map['DeployRegionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImportTagKey'])) {
            $model->importTagKey = $map['ImportTagKey'];
        }
        if (isset($map['ImportTagValue'])) {
            $model->importTagValue = $map['ImportTagValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
