<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class MLDataSetParam extends Model
{
    /**
     * @var string
     */
    public $createBy;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $labelId;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $settingType;
    protected $_name = [
        'createBy'       => 'createBy',
        'createTime'     => 'createTime',
        'dataType'       => 'dataType',
        'datasetId'      => 'datasetId',
        'description'    => 'description',
        'labelId'        => 'labelId',
        'lastModifyTime' => 'lastModifyTime',
        'name'           => 'name',
        'settingType'    => 'settingType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createBy) {
            $res['createBy'] = $this->createBy;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }
        if (null !== $this->datasetId) {
            $res['datasetId'] = $this->datasetId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->labelId) {
            $res['labelId'] = $this->labelId;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->settingType) {
            $res['settingType'] = $this->settingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MLDataSetParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createBy'])) {
            $model->createBy = $map['createBy'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }
        if (isset($map['datasetId'])) {
            $model->datasetId = $map['datasetId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['labelId'])) {
            $model->labelId = $map['labelId'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['settingType'])) {
            $model->settingType = $map['settingType'];
        }

        return $model;
    }
}
