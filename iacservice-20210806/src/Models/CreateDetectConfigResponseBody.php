<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class CreateDetectConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $detectConfigId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectConfigId' => 'detectConfigId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectConfigId) {
            $res['detectConfigId'] = $this->detectConfigId;
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
        if (isset($map['detectConfigId'])) {
            $model->detectConfigId = $map['detectConfigId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
