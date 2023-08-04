<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class Field extends Model
{
    /**
     * @var string
     */
    public $arrayValue;

    /**
     * @var string
     */
    public $blobValue;

    /**
     * @var bool
     */
    public $booleanValue;

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
        'arrayValue'   => 'ArrayValue',
        'blobValue'    => 'BlobValue',
        'booleanValue' => 'BooleanValue',
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
        if (null !== $this->arrayValue) {
            $res['ArrayValue'] = $this->arrayValue;
        }
        if (null !== $this->blobValue) {
            $res['BlobValue'] = $this->blobValue;
        }
        if (null !== $this->booleanValue) {
            $res['BooleanValue'] = $this->booleanValue;
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
        if (isset($map['ArrayValue'])) {
            $model->arrayValue = $map['ArrayValue'];
        }
        if (isset($map['BlobValue'])) {
            $model->blobValue = $map['BlobValue'];
        }
        if (isset($map['BooleanValue'])) {
            $model->booleanValue = $map['BooleanValue'];
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
