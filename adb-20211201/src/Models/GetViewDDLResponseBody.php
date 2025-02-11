<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GetViewDDLResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $SQL;
    protected $_name = [
        'requestId' => 'RequestId',
        'SQL'       => 'SQL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }

        return $model;
    }
}
