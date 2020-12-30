<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\domains;

use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $hostedBy;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $managedBy;
    protected $_name = [
        'isDefault'  => 'IsDefault',
        'hostedBy'   => 'HostedBy',
        'subDomain'  => 'SubDomain',
        'domainName' => 'DomainName',
        'managedBy'  => 'ManagedBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->hostedBy) {
            $res['HostedBy'] = $this->hostedBy;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->managedBy) {
            $res['ManagedBy'] = $this->managedBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['HostedBy'])) {
            $model->hostedBy = $map['HostedBy'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ManagedBy'])) {
            $model->managedBy = $map['ManagedBy'];
        }

        return $model;
    }
}
