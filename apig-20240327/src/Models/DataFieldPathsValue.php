<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class DataFieldPathsValue extends Model
{
    /**
     * @var string
     */
    public $fieldKey;

    /**
     * @var string
     */
    public $jsonPath;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'fieldKey' => 'fieldKey',
        'jsonPath' => 'jsonPath',
        'source' => 'source',
        'category' => 'category',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldKey) {
            $res['fieldKey'] = $this->fieldKey;
        }

        if (null !== $this->jsonPath) {
            $res['jsonPath'] = $this->jsonPath;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
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
        if (isset($map['fieldKey'])) {
            $model->fieldKey = $map['fieldKey'];
        }

        if (isset($map['jsonPath'])) {
            $model->jsonPath = $map['jsonPath'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        return $model;
    }
}
