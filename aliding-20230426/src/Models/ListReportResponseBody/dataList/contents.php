<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class contents extends Model
{
    /**
     * @example env
     *
     * @var string
     */
    public $key;

    /**
     * @example 0
     *
     * @var string
     */
    public $sort;

    /**
     * @example 1
     *
     * @var string
     */
    public $type;

    /**
     * @example ce9ab5d4a80a9401f97c7077e6a9634bd
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'sort'  => 'Sort',
        'type'  => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return contents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
