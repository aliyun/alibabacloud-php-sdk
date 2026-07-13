<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\CreateProtectionPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $protectionPolicyId;
    protected $_name = [
        'protectionPolicyId' => 'ProtectionPolicyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protectionPolicyId) {
            $res['ProtectionPolicyId'] = $this->protectionPolicyId;
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
        if (isset($map['ProtectionPolicyId'])) {
            $model->protectionPolicyId = $map['ProtectionPolicyId'];
        }

        return $model;
    }
}
