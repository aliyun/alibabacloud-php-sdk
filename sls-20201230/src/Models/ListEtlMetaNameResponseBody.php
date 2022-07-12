<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListEtlMetaNameResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string[]
     */
    public $etlMetaNameList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'count'           => 'count',
        'etlMetaNameList' => 'etlMetaNameList',
        'total'           => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->etlMetaNameList) {
            $res['etlMetaNameList'] = $this->etlMetaNameList;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEtlMetaNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['etlMetaNameList'])) {
            if (!empty($map['etlMetaNameList'])) {
                $model->etlMetaNameList = $map['etlMetaNameList'];
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
