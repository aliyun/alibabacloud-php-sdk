<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DeleteEventFieldResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $resuleObject;
    protected $_name = [
        'requestId' => 'RequestId',
        'resuleObject' => 'resuleObject',
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

        if (null !== $this->resuleObject) {
            $res['resuleObject'] = $this->resuleObject;
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

        if (isset($map['resuleObject'])) {
            $model->resuleObject = $map['resuleObject'];
        }

        return $model;
    }
}
