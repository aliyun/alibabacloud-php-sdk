<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationGroupRequest extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cmsGroupId;

    /**
     * @var string
     */
    public $deployRegionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $importTagKey;

    /**
     * @var string
     */
    public $importTagValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'clientToken' => 'ClientToken',
        'cmsGroupId' => 'CmsGroupId',
        'deployRegionId' => 'DeployRegionId',
        'description' => 'Description',
        'importTagKey' => 'ImportTagKey',
        'importTagValue' => 'ImportTagValue',
        'name' => 'Name',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
