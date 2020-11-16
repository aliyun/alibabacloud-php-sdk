<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateBundleResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bundleId;
    protected $_name = [
        'requestId' => 'RequestId',
        'bundleId'  => 'BundleId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('bundleId', $this->bundleId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBundleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }

        return $model;
    }
}
