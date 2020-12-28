<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTokenResponseBody;

use AlibabaCloud\Tea\Model;

class token extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $licenseKey;

    /**
     * @var string
     */
    public $internalDomain;

    /**
     * @var string
     */
    public $pid;
    protected $_name = [
        'domain'         => 'Domain',
        'licenseKey'     => 'LicenseKey',
        'internalDomain' => 'InternalDomain',
        'pid'            => 'Pid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
        }
        if (null !== $this->internalDomain) {
            $res['InternalDomain'] = $this->internalDomain;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return token
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }
        if (isset($map['InternalDomain'])) {
            $model->internalDomain = $map['InternalDomain'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
