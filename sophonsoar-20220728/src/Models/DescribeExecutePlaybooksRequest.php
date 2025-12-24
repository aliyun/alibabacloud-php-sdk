<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribeExecutePlaybooksRequest extends Model
{
    /**
     * @var string
     */
    public $inputMode;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $playbookName;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'inputMode' => 'InputMode',
        'lang' => 'Lang',
        'paramType' => 'ParamType',
        'playbookName' => 'PlaybookName',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputMode) {
            $res['InputMode'] = $this->inputMode;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->playbookName) {
            $res['PlaybookName'] = $this->playbookName;
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
        if (isset($map['InputMode'])) {
            $model->inputMode = $map['InputMode'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['PlaybookName'])) {
            $model->playbookName = $map['PlaybookName'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
