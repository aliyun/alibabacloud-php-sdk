<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListVulAutoRepairConfigResponseBody;

use AlibabaCloud\Tea\Model;

class vulAutoRepairConfigList extends Model
{
    /**
     * @description The alias of the vulnerability.
     *
     * @example RHSA-2022:0274-Important: polkit pkexec Local Privilege Escalation Vulnerability(CVE-2021-4034)
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The configuration ID of the vulnerability.
     *
     * @example 37338
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the vulnerability.
     *
     * @example anolisos:8.4:ANSA-2022:0001
     *
     * @var string
     */
    public $name;

    /**
     * @description The reason why the vulnerability can be automatically fixed.
     *
     * @example The vulnerability fix is risk-free and can be configured to automate the fix.
     *
     * @var string
     */
    public $reason;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName' => 'AliasName',
        'id'        => 'Id',
        'name'      => 'Name',
        'reason'    => 'Reason',
        'type'      => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulAutoRepairConfigList
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
