<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSubCrowdsResponseBody\subCrowds;

class ListSubCrowdsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var subCrowds[]
     */
    public $subCrowds;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'subCrowds'  => 'SubCrowds',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->subCrowds)) {
            Model::validateArray($this->subCrowds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subCrowds) {
            if (\is_array($this->subCrowds)) {
                $res['SubCrowds'] = [];
                $n1               = 0;
                foreach ($this->subCrowds as $item1) {
                    $res['SubCrowds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SubCrowds'])) {
            if (!empty($map['SubCrowds'])) {
                $model->subCrowds = [];
                $n1               = 0;
                foreach ($map['SubCrowds'] as $item1) {
                    $model->subCrowds[$n1++] = subCrowds::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
