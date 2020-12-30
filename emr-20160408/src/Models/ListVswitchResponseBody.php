<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListVswitchResponseBody\vswitchList;
use AlibabaCloud\Tea\Model;

class ListVswitchResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vswitchList
     */
    public $vswitchList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'vswitchList' => 'VswitchList',
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
        if (null !== $this->vswitchList) {
            $res['VswitchList'] = null !== $this->vswitchList ? $this->vswitchList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVswitchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VswitchList'])) {
            $model->vswitchList = vswitchList::fromMap($map['VswitchList']);
        }

        return $model;
    }
}
