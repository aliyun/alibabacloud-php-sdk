<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponseBody\policies\entityGroup\entityRules;

use AlibabaCloud\Dara\Model;

class ipMatchRule extends Model
{
    /**
     * @var string
     */
    public $ipCidr;

    /**
     * @var string
     */
    public $ipFieldKey;
    protected $_name = [
        'ipCidr' => 'ipCidr',
        'ipFieldKey' => 'ipFieldKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipCidr) {
            $res['ipCidr'] = $this->ipCidr;
        }

        if (null !== $this->ipFieldKey) {
            $res['ipFieldKey'] = $this->ipFieldKey;
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
        if (isset($map['ipCidr'])) {
            $model->ipCidr = $map['ipCidr'];
        }

        if (isset($map['ipFieldKey'])) {
            $model->ipFieldKey = $map['ipFieldKey'];
        }

        return $model;
    }
}
