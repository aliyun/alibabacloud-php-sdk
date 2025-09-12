<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ListDataSet2ResponseBody\data;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var int
     */
    public $lineNum;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime' => 'createTime',
        'datasetId' => 'datasetId',
        'lineNum' => 'lineNum',
        'name' => 'name',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->datasetId) {
            $res['datasetId'] = $this->datasetId;
        }

        if (null !== $this->lineNum) {
            $res['lineNum'] = $this->lineNum;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['datasetId'])) {
            $model->datasetId = $map['datasetId'];
        }

        if (isset($map['lineNum'])) {
            $model->lineNum = $map['lineNum'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
