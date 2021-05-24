<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeListenerAccessControlAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $sourceItems;

    /**
     * @var string
     */
    public $accessControlStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'sourceItems'         => 'SourceItems',
        'accessControlStatus' => 'AccessControlStatus',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceItems) {
            $res['SourceItems'] = $this->sourceItems;
        }
        if (null !== $this->accessControlStatus) {
            $res['AccessControlStatus'] = $this->accessControlStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeListenerAccessControlAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceItems'])) {
            $model->sourceItems = $map['SourceItems'];
        }
        if (isset($map['AccessControlStatus'])) {
            $model->accessControlStatus = $map['AccessControlStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
