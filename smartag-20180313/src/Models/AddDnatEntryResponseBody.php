<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class AddDnatEntryResponseBody extends Model
{
    /**
     * @var string
     */
    public $dnatEntryId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dnatEntryId' => 'DnatEntryId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnatEntryId) {
            $res['DnatEntryId'] = $this->dnatEntryId;
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
        if (isset($map['DnatEntryId'])) {
            $model->dnatEntryId = $map['DnatEntryId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
