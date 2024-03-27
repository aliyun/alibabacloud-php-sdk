<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeAndPlaybookResponseBody\data\responseData;

use AlibabaCloud\Tea\Model;

class playbookList extends Model
{
    /**
     * @description The playbook description.
     *
     * @example WafBlockIP
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the playbook.
     *
     * @example WafBlockIP
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The playbook name, which is the unique identifier of the playbook.
     *
     * @example kill_process_isolate_file
     *
     * @var string
     */
    public $name;

    /**
     * @description The opcode of the playbook, which corresponds to the opcode of the playbook recommended for entity handling.
     *
     * @example 7
     *
     * @var string
     */
    public $opCode;

    /**
     * @description Indicates whether quick event handling is selected by default. Valid values:
     *
     *   2: Quick event handling is selected.
     *   1: Quick event handling is displayed but not selected.
     *
     * @example 2
     *
     * @var string
     */
    public $opLevel;

    /**
     * @description The playbook parameters and the corresponding properties.
     *
     * @var mixed[]
     */
    public $paramConfig;

    /**
     * @description The opcode configuration.
     *
     * @example {"opCode":"3"}
     *
     * @var string
     */
    public $taskConfig;

    /**
     * @description Indicates whether the playbook is intended for Web Application Firewall (WAF). Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $wafPlaybook;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name'        => 'Name',
        'opCode'      => 'OpCode',
        'opLevel'     => 'OpLevel',
        'paramConfig' => 'ParamConfig',
        'taskConfig'  => 'TaskConfig',
        'wafPlaybook' => 'WafPlaybook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->opCode) {
            $res['OpCode'] = $this->opCode;
        }
        if (null !== $this->opLevel) {
            $res['OpLevel'] = $this->opLevel;
        }
        if (null !== $this->paramConfig) {
            $res['ParamConfig'] = $this->paramConfig;
        }
        if (null !== $this->taskConfig) {
            $res['TaskConfig'] = $this->taskConfig;
        }
        if (null !== $this->wafPlaybook) {
            $res['WafPlaybook'] = $this->wafPlaybook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playbookList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OpCode'])) {
            $model->opCode = $map['OpCode'];
        }
        if (isset($map['OpLevel'])) {
            $model->opLevel = $map['OpLevel'];
        }
        if (isset($map['ParamConfig'])) {
            if (!empty($map['ParamConfig'])) {
                $model->paramConfig = $map['ParamConfig'];
            }
        }
        if (isset($map['TaskConfig'])) {
            $model->taskConfig = $map['TaskConfig'];
        }
        if (isset($map['WafPlaybook'])) {
            $model->wafPlaybook = $map['WafPlaybook'];
        }

        return $model;
    }
}
