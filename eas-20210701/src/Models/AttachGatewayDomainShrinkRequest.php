<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class AttachGatewayDomainShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customDomainShrink;
    protected $_name = [
        'customDomainShrink' => 'CustomDomain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customDomainShrink) {
            $res['CustomDomain'] = $this->customDomainShrink;
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
            $model->customDomainShrink = $map['CustomDomain'];
        }

        return $model;
    }
}
