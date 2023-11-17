<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookInputOutputResponseBody;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @example [
     * ]
     * @var string
     */
    public $inputParams;

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
     * @example 9030076b-6733-4842-b05a-xxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
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
