<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRabbitmqPublisherResponseBody\publisher;

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
        if (null !== $this->publisher) {
            $this->publisher->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publisher) {
            $res['publisher'] = null !== $this->publisher ? $this->publisher->toArray($noStream) : $this->publisher;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
