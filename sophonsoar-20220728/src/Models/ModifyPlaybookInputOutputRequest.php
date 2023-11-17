<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class ModifyPlaybookInputOutputRequest extends Model
{
    /**
     * @example [
     * ]
     * @var string
     */
    public $inputParams;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example []
     *
     * @var string
     */
    public $outputParams;

    /**
     * @example custom
     *
     * @var string
     */
    public $paramType;

    /**
     * @example 8baa6cff-319e-4ede-97bc-xxxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
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
