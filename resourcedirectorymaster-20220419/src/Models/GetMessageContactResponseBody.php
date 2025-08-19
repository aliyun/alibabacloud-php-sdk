<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactResponseBody\contact;

class GetMessageContactResponseBody extends Model
{
    /**
     * @var contact
     */
    public $contact;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contact' => 'Contact',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->contact) {
            $this->contact->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contact) {
            $res['Contact'] = null !== $this->contact ? $this->contact->toArray($noStream) : $this->contact;
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
        if (isset($map['Contact'])) {
            $model->contact = contact::fromMap($map['Contact']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
