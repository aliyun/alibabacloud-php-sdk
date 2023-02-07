<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\HotlineSessionQueryResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\HotlineSessionQueryResponseBody\data\callDetailRecord;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var callDetailRecord[]
     */
    public $callDetailRecord;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 26
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'callDetailRecord' => 'CallDetailRecord',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callDetailRecord) {
            $res['CallDetailRecord'] = [];
            if (null !== $this->callDetailRecord && \is_array($this->callDetailRecord)) {
                $n = 0;
                foreach ($this->callDetailRecord as $item) {
                    $res['CallDetailRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallDetailRecord'])) {
            if (!empty($map['CallDetailRecord'])) {
                $model->callDetailRecord = [];
                $n                       = 0;
                foreach ($map['CallDetailRecord'] as $item) {
                    $model->callDetailRecord[$n++] = null !== $item ? callDetailRecord::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
