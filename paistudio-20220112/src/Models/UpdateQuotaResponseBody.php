<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class UpdateQuotaResponseBody extends Model
{
    /**
     * @description Quota Id
     *
     * @example quota-20210126170216-mtl37ge7gkvdz
     *
     * @var string
     */
    public $quotaId;

    /**
     * @example 96496E6E-00B4-5F55-80F6-1844FA9E92DC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quotaId'   => 'QuotaId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
