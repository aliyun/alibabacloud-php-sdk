<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryReportDetailResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string[]
     */
    public $images;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $sort;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'images' => 'Images',
        'key'    => 'Key',
        'sort'   => 'Sort',
        'type'   => 'Type',
        'value'  => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1            = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1            = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
