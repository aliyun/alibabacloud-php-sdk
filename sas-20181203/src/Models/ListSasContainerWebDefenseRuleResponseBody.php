<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListSasContainerWebDefenseRuleResponseBody\containerWebDefenseRuleList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSasContainerWebDefenseRuleResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListSasContainerWebDefenseRuleResponseBody extends Model
{
    /**
     * @description The rules for container tamper-proofing.
     *
     * @var containerWebDefenseRuleList[]
     */
    public $containerWebDefenseRuleList;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID, which is used to query logs and troubleshoot issues.
     *
     * @example 8C376***AE74FB4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerWebDefenseRuleList' => 'ContainerWebDefenseRuleList',
        'pageInfo'                    => 'PageInfo',
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerWebDefenseRuleList) {
            $res['ContainerWebDefenseRuleList'] = [];
            if (null !== $this->containerWebDefenseRuleList && \is_array($this->containerWebDefenseRuleList)) {
                $n = 0;
                foreach ($this->containerWebDefenseRuleList as $item) {
                    $res['ContainerWebDefenseRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListSasContainerWebDefenseRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerWebDefenseRuleList'])) {
            if (!empty($map['ContainerWebDefenseRuleList'])) {
                $model->containerWebDefenseRuleList = [];
                $n                                  = 0;
                foreach ($map['ContainerWebDefenseRuleList'] as $item) {
                    $model->containerWebDefenseRuleList[$n++] = null !== $item ? containerWebDefenseRuleList::fromMap($item) : $item;
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
