<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class CreateRabbitmqPublisherResponseBody extends Model
{
    /**
     * @var string
     */
    public $publisherId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'publisherId' => 'publisherId',
        'requestId'   => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publisherId) {
            $res['publisherId'] = $this->publisherId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRabbitmqPublisherResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['publisherId'])) {
            $model->publisherId = $map['publisherId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
