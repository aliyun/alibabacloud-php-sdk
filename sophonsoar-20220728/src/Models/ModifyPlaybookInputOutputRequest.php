<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class ModifyPlaybookInputOutputRequest extends Model
{
    /**
     * @var string
     */
    public $exeConfig;

    /**
     * @description The configuration of the input parameters. The value is a JSON array.
     *
     * @example [
     * ]
     * @var string
     */
    public $inputParams;

    /**
     * @description The language of the content within the request and response.
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The configuration of the output parameters. This parameter is unavailable. Leave it empty.
     *
     * @example []
     *
     * @var string
     */
    public $outputParams;

    /**
     * @description The input parameter type.
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
     * >  You can call the [DescribePlaybooks](~~DescribePlaybooks~~)operation to query the playbook UUID.
     * @example 8baa6cff-319e-4ede-97bc-xxxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'exeConfig'    => 'ExeConfig',
        'inputParams'  => 'InputParams',
        'lang'         => 'Lang',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
     * @return ModifyPlaybookInputOutputRequest
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
