<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateCenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $cenId;
    protected $_name = [
        'requestId' => 'RequestId',
        'cenId'     => 'CenId',
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
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        return $model;
    }
}
