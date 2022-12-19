<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetVulWhitelistResponseBody;

use AlibabaCloud\Tea\Model;

class vulWhitelist extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * @example RHSA-2017:3263: curl security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The ID of the whitelist.
     *
     * @example 1275
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the vulnerability.
     *
     * @example oval:com.redhat.rhsa:def:20173263
     *
     * @var string
     */
    public $name;

    /**
     * @description The reason why the vulnerability is added to the whitelist.
     *
     * @example Ignore
     *
     * @var string
     */
    public $reason;

    /**
     * @description The application scope of the rule. The value is a JSON string that contains the following fields:
     *
     *   **type**: the type of the assets to which the rule is applied. Valid values:
     *
     *   **Uuid**: server
     *   **GroupId**: server group
     *
     *   **groupIds**: the IDs of server groups.
     *
     *   **uuids**: the UUIDs of servers.
     *
     * >  If this parameter is empty, the rule is applied to all assets.
     * @example {
     * }
     * @var string
     */
    public $target;

    /**
     * @description The type of the vulnerability.
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The information about the vulnerability that is added to the whitelist. The value is a JSON string that contains the following fields:
     *
     *   **Name**: the name of the vulnerability.
     *
     *   **Type**: the type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability
     *   **emg**: urgent vulnerability
     *
     *   **AliasName**: the alias of the vulnerability.
     *
     * @example [
     * ]
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'aliasName' => 'AliasName',
        'id'        => 'Id',
        'name'      => 'Name',
        'reason'    => 'Reason',
        'target'    => 'Target',
        'type'      => 'Type',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulWhitelist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }

        return $model;
    }
}
