<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class DeleteResourceGroupResponseBody extends Model
{
    /**
     * @example F082BD0D-21E1-5F9B-81A0-AB07485B03CD
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rgvl9d6utwcscukh
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
     * @return DeleteResourceGroupResponseBody
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
