<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationGroupResponseBody;

use AlibabaCloud\Tea\Model;

class applicationGroup extends Model
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
     * @description The time when the application group was created.
     *
     * @example 2021-09-07T10:28:25Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The ID of the region in which the related resources reside.
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
     * @description The key of the tag.
     *
     * @example k1
     *
     * @var string
     */
    public $importTagKey;

    /**
     * @description The value of the tag.
     *
     * @example v1
     *
     * @var string
     */
    public $importTagValue;

    /**
     * @description The name of the application group.
     *
     * @example UpdateMyApplicationGroup
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the application group was updated.
     *
     * @example 2021-09-08T03:01:53Z
     *
     * @var string
     */
    public $updatedDate;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'createdDate'     => 'CreatedDate',
        'deployRegionId'  => 'DeployRegionId',
        'description'     => 'Description',
        'importTagKey'    => 'ImportTagKey',
        'importTagValue'  => 'ImportTagValue',
        'name'            => 'Name',
        'updatedDate'     => 'UpdatedDate',
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
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
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
        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
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
        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }

        return $model;
    }
}
