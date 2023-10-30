<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForHostShareKeyResponseBody;

use AlibabaCloud\Tea\Model;

class hostAccounts extends Model
{
    /**
     * @description The name of the host account.
     *
     * @example root1234
     *
     * @var string
     */
    public $hostAccountName;

    /**
     * @description The ID of the host.
     *
     * @example 1113
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The ID of the host account.
     *
     * @example 1235
     *
     * @var string
     */
    public $hostsAccountId;

    /**
     * @description The O\&M protocol.
     *
     * @example SSH
     *
     * @var string
     */
    public $protocolName;
    protected $_name = [
        'hostAccountName' => 'HostAccountName',
        'hostId'          => 'HostId',
        'hostsAccountId'  => 'HostsAccountId',
        'protocolName'    => 'ProtocolName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return hostAccounts
     */
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
