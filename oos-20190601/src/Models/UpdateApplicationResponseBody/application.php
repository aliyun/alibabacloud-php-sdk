<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @description The time when the application was created.
     *
     * @example 2021-09-07T09:17:46Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The description of the application.
     *
     * @example test application
     *
     * @var string
     */
    public $description;

    /**
     * @description The application name.
     *
     * @example My-Application
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @example {"k1":"v1","k2":"v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The time when the application was updated.
     *
     * @example 2021-09-07T10:17:46Z
     *
     * @var string
     */
    public $updatedDate;
    protected $_name = [
        'createdDate'     => 'CreatedDate',
        'description'     => 'Description',
        'name'            => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'tags'            => 'Tags',
        'updatedDate'     => 'UpdatedDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
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
        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
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
        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }

        return $model;
    }
}
