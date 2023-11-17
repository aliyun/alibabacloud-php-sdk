<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeNodeUsedInfosResponseBody extends Model
{
    /**
     * @example {
     * "referInfos": [
     * "${play_group.datalist.*.ids}"
     * }
     * @var string
     */
    public $nodeUsedInfos;

    /**
     * @example 3B10F836-C2B1-54FA-AB59-7591B548FB59
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodeUsedInfos' => 'NodeUsedInfos',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeUsedInfos) {
            $res['NodeUsedInfos'] = $this->nodeUsedInfos;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNodeUsedInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeUsedInfos'])) {
            $model->nodeUsedInfos = $map['NodeUsedInfos'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
