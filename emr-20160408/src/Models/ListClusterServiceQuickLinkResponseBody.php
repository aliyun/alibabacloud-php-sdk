<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceQuickLinkResponseBody\quickLinkList;
use AlibabaCloud\Tea\Model;

class ListClusterServiceQuickLinkResponseBody extends Model
{
    /**
     * @var quickLinkList
     */
    public $quickLinkList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quickLinkList' => 'QuickLinkList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quickLinkList) {
            $res['QuickLinkList'] = null !== $this->quickLinkList ? $this->quickLinkList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['QuickLinkList'])) {
            $model->quickLinkList = quickLinkList::fromMap($map['QuickLinkList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
