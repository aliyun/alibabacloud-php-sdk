<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRabbitmqPublisherResponseBody\publisher;
use AlibabaCloud\Tea\Model;

class GetRabbitmqPublisherResponseBody extends Model
{
    /**
     * @var publisher
     */
    public $publisher;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'publisher' => 'publisher',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publisher) {
            $res['publisher'] = null !== $this->publisher ? $this->publisher->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRabbitmqPublisherResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['publisher'])) {
            $model->publisher = publisher::fromMap($map['publisher']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
