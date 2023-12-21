<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateSubCrowdResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 9763624B-5FBB-5E3A-9193-B1ADB554CEAE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var string
     */
    public $subCrowdId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'subCrowdId' => 'SubCrowdId',
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
        if (null !== $this->subCrowdId) {
            $res['SubCrowdId'] = $this->subCrowdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubCrowdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubCrowdId'])) {
            $model->subCrowdId = $map['SubCrowdId'];
        }

        return $model;
    }
}
