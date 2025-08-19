<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class RunClusterCheckResponseBody extends Model
{
    /**
     * @var string
     */
    public $checkId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkId' => 'check_id',
        'requestId' => 'request_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['check_id'] = $this->checkId;
        }

        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
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
        if (isset($map['check_id'])) {
            $model->checkId = $map['check_id'];
        }

        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }

        return $model;
    }
}
