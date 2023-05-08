<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkResponseBody\actionList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeDingTalkResponseBody extends Model
{
    /**
     * @description An array that consists of details of notifications.
     *
     * @var actionList[]
     */
    public $actionList;

    /**
     * @description The status of the notification. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description [{\"type\":\"vul\",\"configItemList\":[{\"key\":\"key\", \"valueList\":\"123\"}]}]
     *
     * @example B256A525-7E42-4BB9-A27C-9017FDDFF1A2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'actionList' => 'ActionList',
        'pageInfo'   => 'PageInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionList) {
            $res['ActionList'] = [];
            if (null !== $this->actionList && \is_array($this->actionList)) {
                $n = 0;
                foreach ($this->actionList as $item) {
                    $res['ActionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDingTalkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionList'])) {
            if (!empty($map['ActionList'])) {
                $model->actionList = [];
                $n                 = 0;
                foreach ($map['ActionList'] as $item) {
                    $model->actionList[$n++] = null !== $item ? actionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
