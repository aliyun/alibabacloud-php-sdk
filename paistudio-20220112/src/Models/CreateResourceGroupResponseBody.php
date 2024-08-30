<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceGroupResponseBody extends Model
{
    /**
     * @example 18D5A1C6-14B8-545E-8408-0A7DDB4C6B5E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description ResourceGroup ID。
     *
     * @example rgf0zhfqn1d4ity2
     *
     * @var string
     */
    public $resourceGroupID;
    protected $_name = [
        'requestId'       => 'RequestId',
        'resourceGroupID' => 'ResourceGroupID',
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
        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }

        return $model;
    }
}
