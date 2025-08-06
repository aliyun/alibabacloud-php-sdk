<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\FaceRegistrationResponseBody\nonExistImageIds;
use AlibabaCloud\SDK\Vod\V20170321\Models\FaceRegistrationResponseBody\registeredPerson;

class FaceRegistrationResponseBody extends Model
{
    /**
     * @var nonExistImageIds
     */
    public $nonExistImageIds;

    /**
     * @var registeredPerson
     */
    public $registeredPerson;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistImageIds' => 'NonExistImageIds',
        'registeredPerson' => 'RegisteredPerson',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->nonExistImageIds) {
            $this->nonExistImageIds->validate();
        }
        if (null !== $this->registeredPerson) {
            $this->registeredPerson->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExistImageIds) {
            $res['NonExistImageIds'] = null !== $this->nonExistImageIds ? $this->nonExistImageIds->toArray($noStream) : $this->nonExistImageIds;
        }

        if (null !== $this->registeredPerson) {
            $res['RegisteredPerson'] = null !== $this->registeredPerson ? $this->registeredPerson->toArray($noStream) : $this->registeredPerson;
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
        if (isset($map['NonExistImageIds'])) {
            $model->nonExistImageIds = nonExistImageIds::fromMap($map['NonExistImageIds']);
        }

        if (isset($map['RegisteredPerson'])) {
            $model->registeredPerson = registeredPerson::fromMap($map['RegisteredPerson']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
