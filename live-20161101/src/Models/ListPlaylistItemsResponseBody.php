<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistItemsResponseBody\programItems;

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
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->programItems)) {
            Model::validateArray($this->programItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->programItems) {
            if (\is_array($this->programItems)) {
                $res['ProgramItems'] = [];
                $n1 = 0;
                foreach ($this->programItems as $item1) {
                    $res['ProgramItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProgramItems'])) {
            if (!empty($map['ProgramItems'])) {
                $model->programItems = [];
                $n1 = 0;
                foreach ($map['ProgramItems'] as $item1) {
                    $model->programItems[$n1] = programItems::fromMap($item1);
                    ++$n1;
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
