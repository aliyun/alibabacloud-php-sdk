<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateExpressCloudConnectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $eccId;
    protected $_name = [
        'requestId' => 'RequestId',
        'eccId'     => 'EccId',
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
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExpressCloudConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }

        return $model;
    }
}
