<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetDomainInfoForPartnerResponseBody\data;

use AlibabaCloud\Dara\Model;

class ownership extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'account' => 'Account',
        'provider' => 'Provider',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        return $model;
    }
}
