<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserGroupResponseBody;

use AlibabaCloud\Tea\Model;

class hostAccounts extends Model
{
    /**
     * @description The ID of the host account.
     *
     * @example 1
     *
     * @var string
     */
    public $hostAccountId;

    /**
     * @description The name of the host account.
     *
     * @example host１
     *
     * @var string
     */
    public $hostAccountName;

    /**
     * @description The ID of the host for which the host accounts were queried.
     *
     * @example １
     *
     * @var string
     */
    public $hostId;

    /**
     * @description Indicates whether the user group is authorized to manage the host account. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $isAuthorized;

    /**
     * @description The protocol that is used by the host. Valid values:
     *
     *   **SSH**
     *   **RDP**
     *
     * @example SSH
     *
     * @var string
     */
    public $protocolName;
    protected $_name = [
        'hostAccountId'   => 'HostAccountId',
        'hostAccountName' => 'HostAccountName',
        'hostId'          => 'HostId',
        'isAuthorized'    => 'IsAuthorized',
        'protocolName'    => 'ProtocolName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccountId) {
            $res['HostAccountId'] = $this->hostAccountId;
        }
        if (null !== $this->hostAccountName) {
            $res['HostAccountName'] = $this->hostAccountName;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->isAuthorized) {
            $res['IsAuthorized'] = $this->isAuthorized;
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
        if (isset($map['HostAccountId'])) {
            $model->hostAccountId = $map['HostAccountId'];
        }
        if (isset($map['HostAccountName'])) {
            $model->hostAccountName = $map['HostAccountName'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['IsAuthorized'])) {
            $model->isAuthorized = $map['IsAuthorized'];
        }
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }

        return $model;
    }
}
