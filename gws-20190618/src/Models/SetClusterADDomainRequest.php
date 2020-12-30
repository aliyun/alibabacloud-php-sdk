<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class SetClusterADDomainRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $domainDnsIp;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainPassword;

    /**
     * @var string
     */
    public $domainAdmin;

    /**
     * @var bool
     */
    public $domainDelete;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'domainDnsIp'    => 'DomainDnsIp',
        'domainName'     => 'DomainName',
        'domainPassword' => 'DomainPassword',
        'domainAdmin'    => 'DomainAdmin',
        'domainDelete'   => 'DomainDelete',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->domainDnsIp) {
            $res['DomainDnsIp'] = $this->domainDnsIp;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainPassword) {
            $res['DomainPassword'] = $this->domainPassword;
        }
        if (null !== $this->domainAdmin) {
            $res['DomainAdmin'] = $this->domainAdmin;
        }
        if (null !== $this->domainDelete) {
            $res['DomainDelete'] = $this->domainDelete;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetClusterADDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DomainDnsIp'])) {
            $model->domainDnsIp = $map['DomainDnsIp'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainPassword'])) {
            $model->domainPassword = $map['DomainPassword'];
        }
        if (isset($map['DomainAdmin'])) {
            $model->domainAdmin = $map['DomainAdmin'];
        }
        if (isset($map['DomainDelete'])) {
            $model->domainDelete = $map['DomainDelete'];
        }

        return $model;
    }
}
