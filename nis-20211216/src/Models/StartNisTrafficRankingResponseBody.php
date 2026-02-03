<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class StartNisTrafficRankingResponseBody extends Model
{
    /**
     * @var string
     */
    public $nisTrafficRankingId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nisTrafficRankingId' => 'NisTrafficRankingId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nisTrafficRankingId) {
            $res['NisTrafficRankingId'] = $this->nisTrafficRankingId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NisTrafficRankingId'])) {
            $model->nisTrafficRankingId = $map['NisTrafficRankingId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
