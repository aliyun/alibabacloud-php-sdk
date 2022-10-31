<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistItemsResponseBody\programItems;
use AlibabaCloud\Tea\Model;

class ListPlaylistItemsResponseBody extends Model
{
    /**
     * @var programItems[]
     */
    public $programItems;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'programItems' => 'ProgramItems',
        'requestId'    => 'RequestId',
        'total'        => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->programItems) {
            $res['ProgramItems'] = [];
            if (null !== $this->programItems && \is_array($this->programItems)) {
                $n = 0;
                foreach ($this->programItems as $item) {
                    $res['ProgramItems'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPlaylistItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProgramItems'])) {
            if (!empty($map['ProgramItems'])) {
                $model->programItems = [];
                $n                   = 0;
                foreach ($map['ProgramItems'] as $item) {
                    $model->programItems[$n++] = null !== $item ? programItems::fromMap($item) : $item;
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
