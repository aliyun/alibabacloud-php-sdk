<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBResponseBody\fpShotDBList;

use AlibabaCloud\Tea\Model;

class fpShotDB extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $fpDBId;
    protected $_name = [
        'status'      => 'Status',
        'description' => 'Description',
        'name'        => 'Name',
        'modelId'     => 'ModelId',
        'fpDBId'      => 'FpDBId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpShotDB
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }

        return $model;
    }
}
