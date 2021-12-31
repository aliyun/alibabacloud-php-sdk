<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataCollectionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $created;

    /**
     * @var string
     */
    public $dataCollectionType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $industryName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $sundialId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $updated;
    protected $_name = [
        'created'            => 'created',
        'dataCollectionType' => 'dataCollectionType',
        'id'                 => 'id',
        'industryName'       => 'industryName',
        'name'               => 'name',
        'status'             => 'status',
        'sundialId'          => 'sundialId',
        'type'               => 'type',
        'updated'            => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->dataCollectionType) {
            $res['dataCollectionType'] = $this->dataCollectionType;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->industryName) {
            $res['industryName'] = $this->industryName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->sundialId) {
            $res['sundialId'] = $this->sundialId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['dataCollectionType'])) {
            $model->dataCollectionType = $map['dataCollectionType'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['industryName'])) {
            $model->industryName = $map['industryName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['sundialId'])) {
            $model->sundialId = $map['sundialId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
