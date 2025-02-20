<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListServiceCredentialsRequest extends Model
{
    /**
     * @var string
     */
    public $serviceCredentialType;
    protected $_name = [
        'serviceCredentialType' => 'serviceCredentialType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceCredentialType) {
            $res['serviceCredentialType'] = $this->serviceCredentialType;
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
        if (isset($map['serviceCredentialType'])) {
            $model->serviceCredentialType = $map['serviceCredentialType'];
        }

        return $model;
    }
}
