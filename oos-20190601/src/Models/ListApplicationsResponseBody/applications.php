<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationsResponseBody;

use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'createDate'      => 'CreateDate',
        'description'     => 'Description',
        'name'            => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'tags'            => 'Tags',
        'updateDate'      => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
