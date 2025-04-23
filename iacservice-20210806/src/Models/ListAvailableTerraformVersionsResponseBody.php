<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class ListAvailableTerraformVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string[]
     */
    public $verisonList;
    protected $_name = [
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
        'verisonList' => 'verisonList',
    ];

    public function validate()
    {
        if (\is_array($this->verisonList)) {
            Model::validateArray($this->verisonList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        if (null !== $this->verisonList) {
            if (\is_array($this->verisonList)) {
                $res['verisonList'] = [];
                $n1 = 0;
                foreach ($this->verisonList as $item1) {
                    $res['verisonList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        if (isset($map['verisonList'])) {
            if (!empty($map['verisonList'])) {
                $model->verisonList = [];
                $n1 = 0;
                foreach ($map['verisonList'] as $item1) {
                    $model->verisonList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
