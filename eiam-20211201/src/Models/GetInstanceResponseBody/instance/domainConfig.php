<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceResponseBody\instance;

use AlibabaCloud\Tea\Model;

class domainConfig extends Model
{
    /**
     * @description The default domain of the instance.
     *
     * @example example-xxx.example.com
     *
     * @var string
     */
    public $defaultDomain;

    /**
     * @description The init domain of the instance.
     *
     * @example example-xxx.aliyunidaas.com
     *
     * @var string
     */
    public $initDomain;

    /**
     * @description Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var string
     */
    public $initDomainAutoRedirectStatus;
    protected $_name = [
        'defaultDomain'                => 'DefaultDomain',
        'initDomain'                   => 'InitDomain',
        'initDomainAutoRedirectStatus' => 'InitDomainAutoRedirectStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return domainConfig
     */
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
