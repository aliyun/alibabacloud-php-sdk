<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class ModelIsUsingRequest extends Model
{
    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'modelCode' => 'ModelCode',
        'modelId' => 'ModelId',
        'modelName' => 'ModelName',
        'regId' => 'RegId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelCode) {
            $res['ModelCode'] = $this->modelCode;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ModelCode'])) {
            $model->modelCode = $map['ModelCode'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
