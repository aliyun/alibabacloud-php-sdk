<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\data;

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

    /**
     * @var string
     */
    public $rootDomain;
    protected $_name = [
        'account' => 'Account',
        'provider' => 'Provider',
        'rootDomain' => 'RootDomain',
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

        if (null !== $this->rootDomain) {
            $res['RootDomain'] = $this->rootDomain;
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

        if (isset($map['RootDomain'])) {
            $model->rootDomain = $map['RootDomain'];
        }

        return $model;
    }
}
