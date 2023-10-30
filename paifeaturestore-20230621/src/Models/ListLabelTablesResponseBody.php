<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLabelTablesResponseBody\labelTables;
use AlibabaCloud\Tea\Model;

class ListLabelTablesResponseBody extends Model
{
    /**
     * @var labelTables[]
     */
    public $labelTables;

    /**
     * @example 728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 21
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'labelTables' => 'LabelTables',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelTables) {
            $res['LabelTables'] = [];
            if (null !== $this->labelTables && \is_array($this->labelTables)) {
                $n = 0;
                foreach ($this->labelTables as $item) {
                    $res['LabelTables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLabelTablesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelTables'])) {
            if (!empty($map['LabelTables'])) {
                $model->labelTables = [];
                $n                  = 0;
                foreach ($map['LabelTables'] as $item) {
                    $model->labelTables[$n++] = null !== $item ? labelTables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
