<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyPropertyScheduleConfigResponseBody extends Model
{
    /**
     * @var bool
     */
    public $modifyResult;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modifyResult' => 'ModifyResult',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifyResult) {
            $res['ModifyResult'] = $this->modifyResult;
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
        if (isset($map['ModifyResult'])) {
            $model->modifyResult = $map['ModifyResult'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
