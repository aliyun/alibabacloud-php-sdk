<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateDataCollectionResponseBody;

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
    public $type;

    /**
     * @var string
     */
    public $industryName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $updated;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sundialId;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'created'            => 'created',
        'dataCollectionType' => 'dataCollectionType',
        'type'               => 'type',
        'industryName'       => 'industryName',
        'status'             => 'status',
        'updated'            => 'updated',
        'name'               => 'name',
        'sundialId'          => 'sundialId',
        'id'                 => 'id',
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->industryName) {
            $res['industryName'] = $this->industryName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sundialId) {
            $res['sundialId'] = $this->sundialId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['industryName'])) {
            $model->industryName = $map['industryName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['sundialId'])) {
            $model->sundialId = $map['sundialId'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
