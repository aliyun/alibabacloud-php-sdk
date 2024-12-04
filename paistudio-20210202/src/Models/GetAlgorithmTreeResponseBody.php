<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmTreeResponseBody extends Model
{
    /**
     * @example 46B59732-033F-5C96-9B15-1E05E7705548
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20210317101023
     *
     * @var string
     */
    public $timestamp;

    /**
     * @var mixed[][]
     */
    public $tree;
    protected $_name = [
        'requestId' => 'RequestId',
        'timestamp' => 'Timestamp',
        'tree'      => 'Tree',
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
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->tree) {
            $res['Tree'] = $this->tree;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlgorithmTreeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Tree'])) {
            if (!empty($map['Tree'])) {
                $model->tree = $map['Tree'];
            }
        }

        return $model;
    }
}
