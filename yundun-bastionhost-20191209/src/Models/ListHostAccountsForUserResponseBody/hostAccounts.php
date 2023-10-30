<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserResponseBody;

use AlibabaCloud\Tea\Model;

class hostAccounts extends Model
{
    /**
     * @description The protocol that is used by the host account. Valid values:
     *
     *   **SSH**
     *   **RDP**
     *
     * @example 1
     *
     * @var string
     */
    public $hostAccountId;

    /**
     * @description The ID of the host account.
     *
     * @example root
     *
     * @var string
     */
    public $hostAccountName;

    /**
     * @description The ID of the request.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The ID of the host for which you want to query the host accounts that the user is authorized to manage.
     *
     * >  You can call the [ListHosts](~~200665~~) operation to query the ID of the host.
     * @example true
     *
     * @var bool
     */
    public $isAuthorized;

    /**
     * @description Indicates whether the user is authorized to manage the host account. Valid values:
     *
     *   **true**: The user is authorized to manage the host account.
     *   **false**: The user is not authorized to manage the host account.
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
