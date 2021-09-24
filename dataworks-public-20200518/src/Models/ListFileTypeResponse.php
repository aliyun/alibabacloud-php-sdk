<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeResponse\nodeTypeInfoList;
use AlibabaCloud\Tea\Model;

class ListFileTypeResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var nodeTypeInfoList
     */
    public $nodeTypeInfoList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'nodeTypeInfoList' => 'NodeTypeInfoList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nodeTypeInfoList', $this->nodeTypeInfoList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nodeTypeInfoList) {
            $res['NodeTypeInfoList'] = null !== $this->nodeTypeInfoList ? $this->nodeTypeInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFileTypeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NodeTypeInfoList'])) {
            $model->nodeTypeInfoList = nodeTypeInfoList::fromMap($map['NodeTypeInfoList']);
        }

        return $model;
    }
}
