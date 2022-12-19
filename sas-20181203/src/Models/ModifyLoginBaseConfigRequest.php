<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyLoginBaseConfigRequest extends Model
{
    /**
     * @description The details about the configuration that is used to detect unusual logons to your servers. The value of this parameter is in the JSON format and contains the following fields:
     *
     * - **totalCount**: the total number of assets.
     * - **uuidCount**: the number of servers to which the configuration is applied.
     * - **id**: the ID of the configuration.
     * - **location**: the name of the common logon location.
     *
     * > You must specify the location parameter only if the Type parameter is set to login_common_location.
     *
     * - **ip**: the common logon IP address.
     *
     * > You must specify the ip parameter only if the Type parameter is set to login_common_ip.
     *
     * - **endTime**: the end time of the common logon time range.
     *
     * > You must specify the endTime parameter only if the Type parameter is set to login_common_time.
     *
     * - **startTime**: the start time of the common logon time range.
     *
     * > You must specify the startTime parameter only if the Type parameter is set to login_common_time.
     *
     * - **account**: the common logon account.
     *
     * > You must specify the account parameter only if the Type parameter is set to login_common_account.
     * @example null
     *
     * @var string
     */
    public $config;

    /**
     * @description The configuration of the server to which the configuration used to detect unusual logons is applied. The value of this parameter is in the JSON format and contains the following fields:
     *
     * - **Target**: the UUID of the server that you want to add or remove.
     * - **targetType*: the type based on which you add servers. Valid values:
     * - **uuid**: servers
     * - **groupId**: server groups
     * - **flag**: the operation that you want to perform on the server. Valid values:
     * - **del**: removes the server from the configuration.
     * - **add**: adds the server to the configuration.
     * @example [{"target":"inet-7c676676-06fa-442e-90fb-b802e5d6****","targetType":"uuid","flag":"add"}]
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of logon configuration that you want to modify. Valid values:
     * - **login_common_location**: common logon location
     * - **login_common_ip**: common logon IP address
     * - **login_common_time**: common logon time range
     * - **login_common_account**: common logon account
     * @example login_common_location
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'target' => 'Target',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLoginBaseConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
