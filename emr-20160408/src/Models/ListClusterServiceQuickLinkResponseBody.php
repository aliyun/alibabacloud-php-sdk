<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceQuickLinkResponseBody\quickLinkList;
use AlibabaCloud\Tea\Model;

class ListClusterServiceQuickLinkResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var quickLinkList
     */
    public $quickLinkList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'quickLinkList' => 'QuickLinkList',
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
        if (null !== $this->quickLinkList) {
            $res['QuickLinkList'] = null !== $this->quickLinkList ? $this->quickLinkList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterServiceQuickLinkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QuickLinkList'])) {
            $model->quickLinkList = quickLinkList::fromMap($map['QuickLinkList']);
        }

        return $model;
    }
}
