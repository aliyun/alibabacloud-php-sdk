<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeAndPlaybookResponseBody\data\responseData;

use AlibabaCloud\Dara\Model;

class playbookList extends Model
{
    /**
     * @var string
     */
    public $available;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $opCode;

    /**
     * @var string
     */
    public $opLevel;

    /**
     * @var mixed[]
     */
    public $paramConfig;

    /**
     * @var string
     */
    public $taskConfig;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var bool
     */
    public $wafPlaybook;
    protected $_name = [
        'available' => 'Available',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name' => 'Name',
        'opCode' => 'OpCode',
        'opLevel' => 'OpLevel',
        'paramConfig' => 'ParamConfig',
        'taskConfig' => 'TaskConfig',
        'uuid' => 'Uuid',
        'wafPlaybook' => 'WafPlaybook',
    ];

    public function validate()
    {
        if (\is_array($this->paramConfig)) {
            Model::validateArray($this->paramConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }

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
            if (\is_array($this->paramConfig)) {
                $res['ParamConfig'] = [];
                $n1 = 0;
                foreach ($this->paramConfig as $item1) {
                    $res['ParamConfig'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskConfig) {
            $res['TaskConfig'] = $this->taskConfig;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->wafPlaybook) {
            $res['WafPlaybook'] = $this->wafPlaybook;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }

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
                $model->paramConfig = [];
                $n1 = 0;
                foreach ($map['ParamConfig'] as $item1) {
                    $model->paramConfig[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskConfig'])) {
            $model->taskConfig = $map['TaskConfig'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['WafPlaybook'])) {
            $model->wafPlaybook = $map['WafPlaybook'];
        }

        return $model;
    }
}
