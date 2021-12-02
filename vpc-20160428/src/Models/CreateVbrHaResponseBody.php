<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVbrHaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vbrHaId;
    protected $_name = [
        'requestId' => 'RequestId',
        'vbrHaId'   => 'VbrHaId',
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
        if (null !== $this->vbrHaId) {
            $res['VbrHaId'] = $this->vbrHaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVbrHaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VbrHaId'])) {
            $model->vbrHaId = $map['VbrHaId'];
        }

        return $model;
    }
}
