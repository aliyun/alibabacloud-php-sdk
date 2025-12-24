<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeExecutePlaybooksResponseBody;

use AlibabaCloud\Dara\Model;

class playbookMetrics extends Model
{
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
    public $paramConfig;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'paramConfig' => 'ParamConfig',
        'paramType' => 'ParamType',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
