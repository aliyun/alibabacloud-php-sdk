<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponseBody\domainConfigs\profile;

class domainConfigs extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var profile
     */
    public $profile;
    protected $_name = [
        'domain' => 'Domain',
        'profile' => 'Profile',
    ];

    public function validate()
    {
        if (null !== $this->profile) {
            $this->profile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->profile) {
            $res['Profile'] = null !== $this->profile ? $this->profile->toArray($noStream) : $this->profile;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Profile'])) {
            $model->profile = profile::fromMap($map['Profile']);
        }

        return $model;
    }
}
