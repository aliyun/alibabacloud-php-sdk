<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLaboratoriesResponseBody\laboratories;

class ListLaboratoriesResponseBody extends Model
{
    /**
     * @var laboratories[]
     */
    public $laboratories;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'laboratories' => 'Laboratories',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->laboratories)) {
            Model::validateArray($this->laboratories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->laboratories) {
            if (\is_array($this->laboratories)) {
                $res['Laboratories'] = [];
                $n1 = 0;
                foreach ($this->laboratories as $item1) {
                    $res['Laboratories'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Laboratories'])) {
            if (!empty($map['Laboratories'])) {
                $model->laboratories = [];
                $n1 = 0;
                foreach ($map['Laboratories'] as $item1) {
                    $model->laboratories[$n1++] = laboratories::fromMap($item1);
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
