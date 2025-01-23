<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeResponseBody\nodeTypeInfoList;

class ListFileTypeResponseBody extends Model
{
    /**
     * @var nodeTypeInfoList
     */
    public $nodeTypeInfoList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodeTypeInfoList' => 'NodeTypeInfoList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->nodeTypeInfoList) {
            $this->nodeTypeInfoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeTypeInfoList) {
            $res['NodeTypeInfoList'] = null !== $this->nodeTypeInfoList ? $this->nodeTypeInfoList->toArray($noStream) : $this->nodeTypeInfoList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NodeTypeInfoList'])) {
            $model->nodeTypeInfoList = nodeTypeInfoList::fromMap($map['NodeTypeInfoList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
