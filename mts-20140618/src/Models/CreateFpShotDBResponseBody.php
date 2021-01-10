<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\CreateFpShotDBResponseBody\fpShotDB;
use AlibabaCloud\Tea\Model;

class CreateFpShotDBResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var fpShotDB
     */
    public $fpShotDB;
    protected $_name = [
        'requestId' => 'RequestId',
        'fpShotDB'  => 'FpShotDB',
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
        if (null !== $this->fpShotDB) {
            $res['FpShotDB'] = null !== $this->fpShotDB ? $this->fpShotDB->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFpShotDBResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FpShotDB'])) {
            $model->fpShotDB = fpShotDB::fromMap($map['FpShotDB']);
        }

        return $model;
    }
}
