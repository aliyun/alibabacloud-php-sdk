<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetResponseBody\resultList;

class BatchCreateVodPackagingAssetResponseBody extends Model
{
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var resultList[]
     */
    public $resultList;
    protected $_name = [
        'groupName'  => 'GroupName',
        'requestId'  => 'RequestId',
        'resultList' => 'ResultList',
    ];

    public function validate()
    {
        if (\is_array($this->resultList)) {
            Model::validateArray($this->resultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultList) {
            if (\is_array($this->resultList)) {
                $res['ResultList'] = [];
                $n1                = 0;
                foreach ($this->resultList as $item1) {
                    $res['ResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n1                = 0;
                foreach ($map['ResultList'] as $item1) {
                    $model->resultList[$n1++] = resultList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
