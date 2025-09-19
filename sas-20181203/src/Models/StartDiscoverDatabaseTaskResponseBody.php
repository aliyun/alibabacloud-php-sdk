<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class StartDiscoverDatabaseTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $createMark;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createMark' => 'CreateMark',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createMark) {
            $res['CreateMark'] = $this->createMark;
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
        if (isset($map['CreateMark'])) {
            $model->createMark = $map['CreateMark'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
