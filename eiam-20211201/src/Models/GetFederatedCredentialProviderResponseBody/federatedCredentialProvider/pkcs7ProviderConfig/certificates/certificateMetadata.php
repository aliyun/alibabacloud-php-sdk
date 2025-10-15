<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetFederatedCredentialProviderResponseBody\federatedCredentialProvider\pkcs7ProviderConfig\certificates;

use AlibabaCloud\Dara\Model;

class certificateMetadata extends Model
{
    /**
     * @var int
     */
    public $notAfter;

    /**
     * @var int
     */
    public $notBefore;
    protected $_name = [
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
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
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }

        return $model;
    }
}
