<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForHostShareKeyResponseBody;

use AlibabaCloud\Dara\Model;

class hostAccounts extends Model
{
    /**
     * @var string
     */
    public $hostAccountName;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $hostsAccountId;

    /**
     * @var string
     */
    public $protocolName;
    protected $_name = [
        'hostAccountName' => 'HostAccountName',
        'hostId' => 'HostId',
        'hostsAccountId' => 'HostsAccountId',
        'protocolName' => 'ProtocolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostAccountName) {
            $res['HostAccountName'] = $this->hostAccountName;
        }

        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        if (null !== $this->hostsAccountId) {
            $res['HostsAccountId'] = $this->hostsAccountId;
        }

        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
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
        if (isset($map['HostAccountName'])) {
            $model->hostAccountName = $map['HostAccountName'];
        }

        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        if (isset($map['HostsAccountId'])) {
            $model->hostsAccountId = $map['HostsAccountId'];
        }

        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }

        return $model;
    }
}
