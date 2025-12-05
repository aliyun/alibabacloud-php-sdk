<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListVpcConfigsResponseBody\vpcConfigList;

class ListVpcConfigsResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var vpcConfigList[]
     */
    public $vpcConfigList;
    protected $_name = [
        'message' => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vpcConfigList' => 'VpcConfigList',
    ];

    public function validate()
    {
        if (\is_array($this->vpcConfigList)) {
            Model::validateArray($this->vpcConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->vpcConfigList) {
            if (\is_array($this->vpcConfigList)) {
                $res['VpcConfigList'] = [];
                $n1 = 0;
                foreach ($this->vpcConfigList as $item1) {
                    $res['VpcConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VpcConfigList'])) {
            if (!empty($map['VpcConfigList'])) {
                $model->vpcConfigList = [];
                $n1 = 0;
                foreach ($map['VpcConfigList'] as $item1) {
                    $model->vpcConfigList[$n1] = vpcConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
