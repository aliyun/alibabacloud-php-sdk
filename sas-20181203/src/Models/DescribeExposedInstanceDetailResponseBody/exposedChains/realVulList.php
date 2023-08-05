<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains;

use AlibabaCloud\Tea\Model;

class realVulList extends Model
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
     * @description The name of the vulnerability.
     *
     * @example SCA:ACSV-2020-052801
     *
     * @var string
     */
    public $name;

    /**
     * @description The priority to fix the vulnerability. Valid values:
     *
     *   **asap**: high
     *   **later**: medium
     *   **nntf**: low
     *
     * > We recommend that you fix the vulnerabilities that have the **high** priority at the earliest opportunity.
     * @example asap
     *
     * @var string
     */
    public $necessity;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **app**: application vulnerability
     *   **emg**: urgent vulnerability
     *   **sca**: middleware vulnerability
     *
     * @example sca
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUID of the server.
     *
     * @example 4f9ce097-4a7d-48fe-baef-6960e5b6****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliasName' => 'AliasName',
        'name'      => 'Name',
        'necessity' => 'Necessity',
        'type'      => 'Type',
        'uuid'      => 'Uuid',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realVulList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
