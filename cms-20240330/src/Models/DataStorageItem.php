<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class DataStorageItem extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $storeType;
    protected $_name = [
        'dataType' => 'dataType',
        'project' => 'project',
        'regionId' => 'regionId',
        'storeName' => 'storeName',
        'storeType' => 'storeType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->storeName) {
            $res['storeName'] = $this->storeName;
        }
        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataStorageItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['storeName'])) {
            $model->storeName = $map['storeName'];
        }
        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }

        return $model;
    }
}
