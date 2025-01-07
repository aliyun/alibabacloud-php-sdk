<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CheckTrialFixCountRequest extends Model
{
    /**
     * @description The information about the vulnerability. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **name**: the name of the vulnerability.
     *
     *   **uuid**: the UUID of the server on which the vulnerability is detected.
     *
     *   **tag**: the tag that is added to the vulnerability. Valid values:
     *
     *   **oval**: Linux software vulnerability.
     *   **system**: Windows system vulnerability.
     *   **cms**: Web-CMS vulnerability.
     *
     * >  You must specify a value for Info or values for VulNames and Uuids to identify a vulnerability.
     * @example [{\\"name\\":\\"oval:com.redhat.rhsa:def:20192143\\",\\"uuid\\":\\"80ee3226-1f96-4da0-a3ed-55c104e2****\\",\\"tag\\":\\"oval\\"}]
     *
     * @var string
     */
    public $info;

    /**
     * @description The type of the vulnerability that you want to fix. Valid values:
     *
     *   **cve**: Linux software vulnerability.
     *   **sys**: Windows system vulnerability.
     *   **cms**: Web-CMS vulnerability.
     *
     * This parameter is required.
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUIDs of the servers.
     *
     * @var string[]
     */
    public $uuids;

    /**
     * @description The names of the vulnerabilities.
     *
     * @var string[]
     */
    public $vulNames;
    protected $_name = [
        'info'     => 'Info',
        'type'     => 'Type',
        'uuids'    => 'Uuids',
        'vulNames' => 'VulNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }
        if (null !== $this->vulNames) {
            $res['VulNames'] = $this->vulNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckTrialFixCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = $map['Uuids'];
            }
        }
        if (isset($map['VulNames'])) {
            if (!empty($map['VulNames'])) {
                $model->vulNames = $map['VulNames'];
            }
        }

        return $model;
    }
}
