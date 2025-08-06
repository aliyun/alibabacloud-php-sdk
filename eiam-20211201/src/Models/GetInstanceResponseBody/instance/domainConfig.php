<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceResponseBody\instance;

use AlibabaCloud\Dara\Model;

class domainConfig extends Model
{
    /**
     * @var string
     */
    public $defaultDomain;

    /**
     * @var string
     */
    public $initDomain;

    /**
     * @var string
     */
    public $initDomainAutoRedirectStatus;
    protected $_name = [
        'defaultDomain' => 'DefaultDomain',
        'initDomain' => 'InitDomain',
        'initDomainAutoRedirectStatus' => 'InitDomainAutoRedirectStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultDomain) {
            $res['DefaultDomain'] = $this->defaultDomain;
        }

        if (null !== $this->initDomain) {
            $res['InitDomain'] = $this->initDomain;
        }

        if (null !== $this->initDomainAutoRedirectStatus) {
            $res['InitDomainAutoRedirectStatus'] = $this->initDomainAutoRedirectStatus;
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
        if (isset($map['DefaultDomain'])) {
            $model->defaultDomain = $map['DefaultDomain'];
        }

        if (isset($map['InitDomain'])) {
            $model->initDomain = $map['InitDomain'];
        }

        if (isset($map['InitDomainAutoRedirectStatus'])) {
            $model->initDomainAutoRedirectStatus = $map['InitDomainAutoRedirectStatus'];
        }

        return $model;
    }
}
