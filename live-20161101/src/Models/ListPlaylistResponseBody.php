<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistResponseBody\programList;
use AlibabaCloud\Tea\Model;

class ListPlaylistResponseBody extends Model
{
    /**
     * @description The episode lists.
     *
     * @var programList[]
     */
    public $programList;

    /**
     * @description The request ID.
     *
     * @example 5c6a2a0d-f228-4a64-af62-20e91b96****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of episode lists returned.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'programList' => 'ProgramList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->programList) {
            $res['ProgramList'] = [];
            if (null !== $this->programList && \is_array($this->programList)) {
                $n = 0;
                foreach ($this->programList as $item) {
                    $res['ProgramList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPlaylistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProgramList'])) {
            if (!empty($map['ProgramList'])) {
                $model->programList = [];
                $n = 0;
                foreach ($map['ProgramList'] as $item) {
                    $model->programList[$n++] = null !== $item ? programList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
