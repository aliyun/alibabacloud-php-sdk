<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCloudAccessResponseBody\cloudAccessList;

class ListCloudAccessResponseBody extends Model
{
    /**
     * @var cloudAccessList[]
     */
    public $cloudAccessList;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $showSize;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cloudAccessList' => 'CloudAccessList',
        'currentPage'     => 'CurrentPage',
        'requestId'       => 'RequestId',
        'showSize'        => 'ShowSize',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->cloudAccessList)) {
            Model::validateArray($this->cloudAccessList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccessList) {
            if (\is_array($this->cloudAccessList)) {
                $res['CloudAccessList'] = [];
                $n1                     = 0;
                foreach ($this->cloudAccessList as $item1) {
                    $res['CloudAccessList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
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
        if (isset($map['CloudAccessList'])) {
            if (!empty($map['CloudAccessList'])) {
                $model->cloudAccessList = [];
                $n1                     = 0;
                foreach ($map['CloudAccessList'] as $item1) {
                    $model->cloudAccessList[$n1++] = cloudAccessList::fromMap($item1);
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
