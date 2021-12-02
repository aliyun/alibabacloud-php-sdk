<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody\dhcpOptionsSets;

use AlibabaCloud\Tea\Model;

class dhcpOptions extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainNameServers;
    protected $_name = [
        'domainName'        => 'DomainName',
        'domainNameServers' => 'DomainNameServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameServers) {
            $res['DomainNameServers'] = $this->domainNameServers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dhcpOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameServers'])) {
            $model->domainNameServers = $map['DomainNameServers'];
        }

        return $model;
    }
}
