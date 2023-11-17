<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeExecutePlaybooksResponseBody;

use AlibabaCloud\Tea\Model;

class playbookMetrics extends Model
{
    /**
     * @example a demo playbook
     *
     * @var string
     */
    public $description;

    /**
     * @example demo_playbook
     *
     * @var string
     */
    public $displayName;

    /**
     * @example [
     * ]
     * @var string
     */
    public $paramConfig;

    /**
     * @example custom
     *
     * @var string
     */
    public $paramType;

    /**
     * @example c5c88b5e-97ca-435d-8c20-2xxxxx
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'paramConfig' => 'ParamConfig',
        'paramType'   => 'ParamType',
        'uuid'        => 'Uuid',
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
        if (null !== $this->paramConfig) {
            $res['ParamConfig'] = $this->paramConfig;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playbookMetrics
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
        if (isset($map['ParamConfig'])) {
            $model->paramConfig = $map['ParamConfig'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
