<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybooksResponseBody;

use AlibabaCloud\Tea\Model;

class playbooks extends Model
{
    /**
     * @description The playbook status. Valid values:
     *
     *   **1**: The playbook is started.
     *   **0**: The playbook is stopped.
     *
     * @example 1
     *
     * @var int
     */
    public $active;

    /**
     * @description The display name of the playbook.
     *
     * @example demo_playbook
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The time when the playbook was created. The value is a 13-digit timestamp.
     *
     * @example 1683526277415
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the playbook was last run. The value is a 13-digit timestamp.
     *
     * @example 1683526277415
     *
     * @var int
     */
    public $lastRuntime;

    /**
     * @description The type of the playbook. Valid values:
     *
     *   **preset**: predefined playbook
     *   **user**: custom playbook
     *
     * @example user
     *
     * @var string
     */
    public $ownType;

    /**
     * @description The UUID of the playbook.
     *
     * @example bb5a8640-a14f-44ef-8376-cxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'active'       => 'Active',
        'displayName'  => 'DisplayName',
        'gmtCreate'    => 'GmtCreate',
        'lastRuntime'  => 'LastRuntime',
        'ownType'      => 'OwnType',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->lastRuntime) {
            $res['LastRuntime'] = $this->lastRuntime;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playbooks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['LastRuntime'])) {
            $model->lastRuntime = $map['LastRuntime'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
