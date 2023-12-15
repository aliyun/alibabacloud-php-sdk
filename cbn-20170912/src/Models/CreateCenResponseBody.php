<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateCenResponseBody extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-dc4vwznpwbobrl****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the request.
     *
     * @example 0C2EE7A8-74D4-4081-8236-CEBDE3BBCF50
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cenId'     => 'CenId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
