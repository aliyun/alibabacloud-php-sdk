<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserEncryptionKeyListResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example pc-************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string[]
     */
    public $keyList;

    /**
     * @description The ID of the request.
     *
     * @example A7E6A8FD-C50B-46B2-BA85-D8B8D3******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'keyList'     => 'KeyList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->keyList) {
            $res['KeyList'] = $this->keyList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserEncryptionKeyListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['KeyList'])) {
            if (!empty($map['KeyList'])) {
                $model->keyList = $map['KeyList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
