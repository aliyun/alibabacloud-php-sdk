<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListNetworkDomainsResponseBody\networkDomains;
use AlibabaCloud\Tea\Model;

class ListNetworkDomainsResponseBody extends Model
{
    /**
     * @var networkDomains[]
     */
    public $networkDomains;

    /**
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'networkDomains' => 'NetworkDomains',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkDomains) {
            $res['NetworkDomains'] = [];
            if (null !== $this->networkDomains && \is_array($this->networkDomains)) {
                $n = 0;
                foreach ($this->networkDomains as $item) {
                    $res['NetworkDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNetworkDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkDomains'])) {
            if (!empty($map['NetworkDomains'])) {
                $model->networkDomains = [];
                $n                     = 0;
                foreach ($map['NetworkDomains'] as $item) {
                    $model->networkDomains[$n++] = null !== $item ? networkDomains::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
