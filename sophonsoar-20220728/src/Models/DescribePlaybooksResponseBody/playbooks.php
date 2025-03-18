<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybooksResponseBody;

use AlibabaCloud\Tea\Model;

class playbooks extends Model
{
    /**
     * @description The status indicator of the playbook. Values:
     *
     * - **1**: Indicates the playbook is activated.
     * - **0**: Indicates the playbook is deactivated.
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
     * @description The creation time of the playbook, in 13-digit timestamp format.
     *
     * @example 1683526277415
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The modification time of the playbook.
     *
     * @example 1681396398000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The last execution time of the playbook, in 13-digit timestamp format.
     *
     * @example 1683526277415
     *
     * @var int
     */
    public $lastRuntime;

    /**
     * @description The type of the playbook. Values:
     *
     * - **preset**: Predefined playbook.
     * - **user**: Custom playbook.
     *
     * @example user
     *
     * @var string
     */
    public $ownType;

    /**
     * @description The trigger method for the playbook, with a default value of **query all**. Possible values are:
     * - **template-incident**: Security incident.
     * - **template-ip**: IP entity.
     * - **template-file**: File entity.
     * - **template-process**: Process entity.
     * - **template-alert**: Security alert.
     * - **template-domain**: Domain entity.
     * - **template-container**: Container entity.
     * - **template-host**: Host entity.
     *
     * @example template-alert
     *
     * @var string
     */
    public $paramType;

    /**
     * @description The UUID of the playbook.
     *
     * @example bb5a8640-a14f-44ef-8376-cxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'active' => 'Active',
        'displayName' => 'DisplayName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'lastRuntime' => 'LastRuntime',
        'ownType' => 'OwnType',
        'paramType' => 'ParamType',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate() {}

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
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->lastRuntime) {
            $res['LastRuntime'] = $this->lastRuntime;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['LastRuntime'])) {
            $model->lastRuntime = $map['LastRuntime'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
