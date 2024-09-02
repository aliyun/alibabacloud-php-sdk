<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GenerateMergedTableResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The tables on which the JOIN operation is performed.
     *
     * @example -
     *
     * @var mixed[]
     */
    public $fromTable;

    /**
     * @description The wide table that is generated after the JOIN operation is performed on multiple tables.
     *
     * @example -
     *
     * @var mixed[]
     */
    public $mergeTable;

    /**
     * @description The primary key.
     *
     * @example -
     *
     * @var string
     */
    public $primaryKey;
    protected $_name = [
        'fromTable'  => 'fromTable',
        'mergeTable' => 'mergeTable',
        'primaryKey' => 'primaryKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromTable) {
            $res['fromTable'] = $this->fromTable;
        }
        if (null !== $this->mergeTable) {
            $res['mergeTable'] = $this->mergeTable;
        }
        if (null !== $this->primaryKey) {
            $res['primaryKey'] = $this->primaryKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fromTable'])) {
            $model->fromTable = $map['fromTable'];
        }
        if (isset($map['mergeTable'])) {
            $model->mergeTable = $map['mergeTable'];
        }
        if (isset($map['primaryKey'])) {
            $model->primaryKey = $map['primaryKey'];
        }

        return $model;
    }
}
