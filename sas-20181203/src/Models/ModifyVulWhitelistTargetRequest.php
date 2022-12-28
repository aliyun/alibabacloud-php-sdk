<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyVulWhitelistTargetRequest extends Model
{
    /**
     * @description The ID of the whitelist.
     *
     * >  You can call the [DescribeVulWhitelist](~~DescribeVulWhitelist~~) operation to query the IDs of whitelists.
     * @example 2533681
     *
     * @var int
     */
    public $id;

    /**
     * @description The reason why you add the server to the whitelist.
     *
     * @example 1221
     *
     * @var string
     */
    public $reason;

    /**
     * @description The source IP address of the request.
     *
     * @example 42.120.75.150
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The applicable scope of the whitelist. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **type**: the type of the applicable scope. Valid values:
     *
     *   **GroupId**: the ID of a server group
     *   **Uuid**: the UUID of a server
     *
     *   **uuids**: the UUIDs of servers
     *
     *   **groupIds**: the IDs of server groups
     *
     * >  If you leave this parameter empty, all servers are added to the whitelist. If you set the **type** field to **GroupId**, you must also specify the **groupIds** field. If you set the **type** field to **Uuid**, you must also specify the **uuids** field.
     * @example {
     * }
     * @var string
     */
    public $targetInfo;
    protected $_name = [
        'id'         => 'Id',
        'reason'     => 'Reason',
        'sourceIp'   => 'SourceIp',
        'targetInfo' => 'TargetInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = $this->targetInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVulWhitelistTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TargetInfo'])) {
            $model->targetInfo = $map['TargetInfo'];
        }

        return $model;
    }
}
