<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookInputOutputResponseBody;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $exeConfig;

    /**
     * @description The input parameter configuration of the playbook. The value is a JSON array.
     *
     * @example [
     * ]
     * @var string
     */
    public $inputParams;

    /**
     * @description The output parameter configuration. This parameter is unavailable and is always left empty.
     *
     * @example []
     *
     * @var string
     */
    public $outputParams;

    /**
     * @description The input parameter type of the playbook. Valid values:
     *
     *   **template-ip**
     *   **template-file**
     *   **template-process**
     *   **custom**
     *
     * @example custom
     *
     * @var string
     */
    public $paramType;

    /**
     * @description The UUID of the playbook.
     *
     * @example 9030076b-6733-4842-b05a-xxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'exeConfig'    => 'ExeConfig',
        'inputParams'  => 'InputParams',
        'outputParams' => 'OutputParams',
        'paramType'    => 'ParamType',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exeConfig) {
            $res['ExeConfig'] = $this->exeConfig;
        }
        if (null !== $this->inputParams) {
            $res['InputParams'] = $this->inputParams;
        }
        if (null !== $this->outputParams) {
            $res['OutputParams'] = $this->outputParams;
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
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExeConfig'])) {
            $model->exeConfig = $map['ExeConfig'];
        }
        if (isset($map['InputParams'])) {
            $model->inputParams = $map['InputParams'];
        }
        if (isset($map['OutputParams'])) {
            $model->outputParams = $map['OutputParams'];
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
