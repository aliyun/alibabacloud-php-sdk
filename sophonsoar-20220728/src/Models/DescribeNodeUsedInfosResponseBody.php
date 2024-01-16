<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeNodeUsedInfosResponseBody extends Model
{
    /**
     * @description The node reference information. The value is in the JSON format and contains the following fields:
     *
     *   **action**: the referencing action. This field contains the following information:
     *
     *   **name**: the name of the referencing node.
     *   **inputParams**: the parameter settings of the referencing node.
     *
     * @example {
     * "referInfos": [
     * "${play_group.datalist.*.ids}"
     * }
     * @var string
     */
    public $nodeUsedInfos;

    /**
     * @description The request ID.
     *
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
