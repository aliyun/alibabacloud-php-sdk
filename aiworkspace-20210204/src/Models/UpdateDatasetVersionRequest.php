<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class UpdateDatasetVersionRequest extends Model
{
    /**
     * @var int
     */
    public $dataCount;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $options;
    protected $_name = [
        'dataCount' => 'DataCount',
        'dataSize' => 'DataSize',
        'description' => 'Description',
        'options' => 'Options',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataCount) {
            $res['DataCount'] = $this->dataCount;
        }

        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
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
        if (isset($map['DataCount'])) {
            $model->dataCount = $map['DataCount'];
        }

        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        return $model;
    }
}
