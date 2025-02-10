<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class CreateFullNatEntryResponseBody extends Model
{
    /**
     * @var string
     */
    public $fullNatEntryId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fullNatEntryId' => 'FullNatEntryId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullNatEntryId) {
            $res['FullNatEntryId'] = $this->fullNatEntryId;
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
        if (isset($map['FullNatEntryId'])) {
            $model->fullNatEntryId = $map['FullNatEntryId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
