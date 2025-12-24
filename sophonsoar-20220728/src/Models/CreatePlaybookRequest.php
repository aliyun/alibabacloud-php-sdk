<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class CreatePlaybookRequest extends Model
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
    public $inputParams;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $outputParams;

    /**
     * @var string
     */
    public $taskflowType;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'inputParams' => 'InputParams',
        'lang' => 'Lang',
        'outputParams' => 'OutputParams',
        'taskflowType' => 'TaskflowType',
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

        if (null !== $this->inputParams) {
            $res['InputParams'] = $this->inputParams;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->outputParams) {
            $res['OutputParams'] = $this->outputParams;
        }

        if (null !== $this->taskflowType) {
            $res['TaskflowType'] = $this->taskflowType;
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

        if (isset($map['InputParams'])) {
            $model->inputParams = $map['InputParams'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['OutputParams'])) {
            $model->outputParams = $map['OutputParams'];
        }

        if (isset($map['TaskflowType'])) {
            $model->taskflowType = $map['TaskflowType'];
        }

        return $model;
    }
}
