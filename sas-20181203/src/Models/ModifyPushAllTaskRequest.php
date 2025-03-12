<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyPushAllTaskRequest extends Model
{
    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The check items. Separate multiple check items with commas (,). Valid values:
     *
     *   **OVAL_ENTITY**: Common Vulnerabilities and Exposures (CVE) vulnerabilities
     *   **CMS**: Web-CMS vulnerabilities
     *   **SYSVUL**: Windows system vulnerabilities
     *   **SCA**: application vulnerabilities
     *   **HEALTH_CHECK**: baselines
     *   **WEBSHELL**: webshells
     *   **PROC_SNAPSHOT**: processes
     *   **PORT_SNAPSHOT**: ports
     *   **ACCOUNT_SNAPSHOT**: accounts
     *   **SOFTWARE_SNAPSHOT**: software assets
     *   **SCA_SNAPSHOT**: middleware
     *
     * This parameter is required.
     * @example HEALTH_CHECK,OVAL_ENTITY
     *
     * @var string
     */
    public $tasks;

    /**
     * @description The UUIDs of servers on which you want to perform security check tasks. Separate multiple UUIDs with commas (,).
     *
     * This parameter is required.
     * @example inet-923b4538-0e88-409d-80ba-cb2e7487****,dc1691eb-656f-472f-b2aa-04f621f4****,70452f92-9fc1-45c5-ab35-e7bf8552****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'tasks'    => 'Tasks',
        'uuids'    => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = $this->tasks;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPushAllTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Tasks'])) {
            $model->tasks = $map['Tasks'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
