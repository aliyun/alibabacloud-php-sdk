<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DetachGatewayDomainRequest\customDomain;

class DetachGatewayDomainRequest extends Model
{
    /**
     * @var customDomain
     */
    public $customDomain;
    protected $_name = [
        'customDomain' => 'CustomDomain',
    ];

    public function validate()
    {
        if (null !== $this->customDomain) {
            $this->customDomain->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customDomain) {
            $res['CustomDomain'] = null !== $this->customDomain ? $this->customDomain->toArray($noStream) : $this->customDomain;
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
        if (isset($map['CustomDomain'])) {
            $model->customDomain = customDomain::fromMap($map['CustomDomain']);
        }

        return $model;
    }
}
