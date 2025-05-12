<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\CreateFpShotDBResponseBody\fpShotDB;

class CreateFpShotDBResponseBody extends Model
{
    /**
     * @var fpShotDB
     */
    public $fpShotDB;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fpShotDB' => 'FpShotDB',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->fpShotDB) {
            $this->fpShotDB->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotDB) {
            $res['FpShotDB'] = null !== $this->fpShotDB ? $this->fpShotDB->toArray($noStream) : $this->fpShotDB;
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
        if (isset($map['FpShotDB'])) {
            $model->fpShotDB = fpShotDB::fromMap($map['FpShotDB']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
