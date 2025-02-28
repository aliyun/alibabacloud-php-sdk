<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListTableMetasResponseBody\tableMetas;

class ListTableMetasResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var tableMetas[]
     */
    public $tableMetas;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'tableMetas' => 'TableMetas',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->tableMetas)) {
            Model::validateArray($this->tableMetas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tableMetas) {
            if (\is_array($this->tableMetas)) {
                $res['TableMetas'] = [];
                $n1                = 0;
                foreach ($this->tableMetas as $item1) {
                    $res['TableMetas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TableMetas'])) {
            if (!empty($map['TableMetas'])) {
                $model->tableMetas = [];
                $n1                = 0;
                foreach ($map['TableMetas'] as $item1) {
                    $model->tableMetas[$n1++] = tableMetas::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
