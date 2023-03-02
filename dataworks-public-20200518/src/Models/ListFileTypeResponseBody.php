<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeResponseBody\nodeTypeInfoList;
use AlibabaCloud\Tea\Model;

class ListFileTypeResponseBody extends Model
{
    /**
     * @description The information of the node types.
     *
     * @var nodeTypeInfoList
     */
    public $nodeTypeInfoList;

    /**
     * @description The ID of the request. You can use the ID to troubleshoot issues.
     *
     * @example 0000-ABCD-EFG****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodeTypeInfoList' => 'NodeTypeInfoList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeTypeInfoList) {
            $res['NodeTypeInfoList'] = null !== $this->nodeTypeInfoList ? $this->nodeTypeInfoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFileTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeTypeInfoList'])) {
            $model->nodeTypeInfoList = nodeTypeInfoList::fromMap($map['NodeTypeInfoList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
