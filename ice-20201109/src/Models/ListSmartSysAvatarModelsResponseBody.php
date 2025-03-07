<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartSysAvatarModelsResponseBody\smartSysAvatarModelList;
use AlibabaCloud\Tea\Model;

class ListSmartSysAvatarModelsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example ****63E8B7C7-4812-46AD-0FA56029AC86****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried digital humans.
     *
     * @var smartSysAvatarModelList[]
     */
    public $smartSysAvatarModelList;

    /**
     * @description The total number of system digital human images returned.
     *
     * @example 4
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->smartSysAvatarModelList) {
            $res['SmartSysAvatarModelList'] = [];
            if (null !== $this->smartSysAvatarModelList && \is_array($this->smartSysAvatarModelList)) {
                $n = 0;
                foreach ($this->smartSysAvatarModelList as $item) {
                    $res['SmartSysAvatarModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSmartSysAvatarModelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SmartSysAvatarModelList'])) {
            if (!empty($map['SmartSysAvatarModelList'])) {
                $model->smartSysAvatarModelList = [];
                $n                              = 0;
                foreach ($map['SmartSysAvatarModelList'] as $item) {
                    $model->smartSysAvatarModelList[$n++] = null !== $item ? smartSysAvatarModelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
