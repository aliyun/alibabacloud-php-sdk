<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckResultResponseBody;

use AlibabaCloud\Tea\Model;

class checkResultList extends Model
{
    /**
     * @description The compliance status. Valid values:
     *
     *   **1**: compliant
     *   **0**: non-compliant
     *
     * @example 1
     *
     * @var int
     */
    public $complianceStatus;

    /**
     * @description The name of the corresponding section. Valid values:
     *
     *   **information_classification**: information classification
     *   **information_mark**: information labeling
     *   **network_security_policy**: access to networks and network services
     *   **login_control**: secure logon procedures
     *   **week_password**: password management system
     *   **key_manage**: key management
     *   **malicious_software**: protection against malware
     *   **information_backup**: information backup
     *   **audit_policy**: information system audit control mechanisms
     *
     * @example information_mark
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'complianceStatus' => 'ComplianceStatus',
        'name'             => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceStatus) {
            $res['ComplianceStatus'] = $this->complianceStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceStatus'])) {
            $model->complianceStatus = $map['ComplianceStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
