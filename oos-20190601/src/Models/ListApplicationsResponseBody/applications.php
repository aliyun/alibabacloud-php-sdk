<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationsResponseBody;

use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @description The type of the application.
     *
     * @example DingTalk
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description The time when the application was created.
     *
     * @example 2021-09-07T09:09:59Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The description of the application.
     *
     * @example Application
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the application.
     *
     * @example MyApplication
     *
     * @var string
     */
    public $name;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmxsn4m******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags added to the application.
     *
     * @example {"k1": "v1","k2": "v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The time when the application was updated.
     *
     * @example 2021-09-07T09:09:59Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'applicationType' => 'ApplicationType',
        'createDate' => 'CreateDate',
        'description' => 'Description',
        'name' => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'updateDate' => 'UpdateDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
