<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class Field extends Model
{
    /**
     * @var string
     */
    public $blobValue;

    /**
     * @var bool
     */
    public $booleanValue;

    /**
     * @var float
     */
    public $doubleValue;

    /**
     * @var bool
     */
    public $isNull;

    /**
     * @var int
     */
    public $longValue;

    /**
     * @var string
     */
    public $stringValue;
    protected $_name = [
        'blobValue'    => 'BlobValue',
        'booleanValue' => 'BooleanValue',
        'doubleValue'  => 'DoubleValue',
        'isNull'       => 'IsNull',
        'longValue'    => 'LongValue',
        'stringValue'  => 'StringValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blobValue) {
            $res['BlobValue'] = $this->blobValue;
        }
        if (null !== $this->booleanValue) {
            $res['BooleanValue'] = $this->booleanValue;
        }
        if (null !== $this->doubleValue) {
            $res['DoubleValue'] = $this->doubleValue;
        }
        if (null !== $this->isNull) {
            $res['IsNull'] = $this->isNull;
        }
        if (null !== $this->longValue) {
            $res['LongValue'] = $this->longValue;
        }
        if (null !== $this->stringValue) {
            $res['StringValue'] = $this->stringValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Field
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlobValue'])) {
            $model->blobValue = $map['BlobValue'];
        }
        if (isset($map['BooleanValue'])) {
            $model->booleanValue = $map['BooleanValue'];
        }
        if (isset($map['DoubleValue'])) {
            $model->doubleValue = $map['DoubleValue'];
        }
        if (isset($map['IsNull'])) {
            $model->isNull = $map['IsNull'];
        }
        if (isset($map['LongValue'])) {
            $model->longValue = $map['LongValue'];
        }
        if (isset($map['StringValue'])) {
            $model->stringValue = $map['StringValue'];
        }

        return $model;
    }
}
