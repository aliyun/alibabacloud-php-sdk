<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class SetIdpMetadataResponseBody extends Model
{
    /**
     * @var string
     */
    public $idpEntityId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'idpEntityId' => 'IdpEntityId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idpEntityId) {
            $res['IdpEntityId'] = $this->idpEntityId;
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
        if (isset($map['IdpEntityId'])) {
            $model->idpEntityId = $map['IdpEntityId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
