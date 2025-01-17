<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartSysAvatarModelsResponseBody\smartSysAvatarModelList;

class ListSmartSysAvatarModelsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var smartSysAvatarModelList[]
     */
    public $smartSysAvatarModelList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'               => 'RequestId',
        'smartSysAvatarModelList' => 'SmartSysAvatarModelList',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->smartSysAvatarModelList)) {
            Model::validateArray($this->smartSysAvatarModelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->smartSysAvatarModelList) {
            if (\is_array($this->smartSysAvatarModelList)) {
                $res['SmartSysAvatarModelList'] = [];
                $n1                             = 0;
                foreach ($this->smartSysAvatarModelList as $item1) {
                    $res['SmartSysAvatarModelList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SmartSysAvatarModelList'])) {
            if (!empty($map['SmartSysAvatarModelList'])) {
                $model->smartSysAvatarModelList = [];
                $n1                             = 0;
                foreach ($map['SmartSysAvatarModelList'] as $item1) {
                    $model->smartSysAvatarModelList[$n1++] = smartSysAvatarModelList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
