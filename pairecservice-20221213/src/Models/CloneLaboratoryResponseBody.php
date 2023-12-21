<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CloneLaboratoryResponseBody extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $laboratoryId;

    /**
     * @description Id of the request
     *
     * @example 01D22D08-BA20-5F35-8302-99115F288220
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'laboratoryId' => 'LaboratoryId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->laboratoryId) {
            $res['LaboratoryId'] = $this->laboratoryId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneLaboratoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaboratoryId'])) {
            $model->laboratoryId = $map['LaboratoryId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
