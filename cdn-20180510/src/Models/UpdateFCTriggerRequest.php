<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class UpdateFCTriggerRequest extends Model
{
    /**
     * @var string
     */
    public $functionARN;

    /**
     * @var string
     */
    public $notes;

    /**
     * @var string
     */
    public $roleARN;

    /**
     * @var string
     */
    public $sourceARN;

    /**
     * @var string
     */
    public $triggerARN;
    protected $_name = [
        'functionARN' => 'FunctionARN',
        'notes' => 'Notes',
        'roleARN' => 'RoleARN',
        'sourceARN' => 'SourceARN',
        'triggerARN' => 'TriggerARN',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionARN) {
            $res['FunctionARN'] = $this->functionARN;
        }

        if (null !== $this->notes) {
            $res['Notes'] = $this->notes;
        }

        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }

        if (null !== $this->sourceARN) {
            $res['SourceARN'] = $this->sourceARN;
        }

        if (null !== $this->triggerARN) {
            $res['TriggerARN'] = $this->triggerARN;
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
        if (isset($map['FunctionARN'])) {
            $model->functionARN = $map['FunctionARN'];
        }

        if (isset($map['Notes'])) {
            $model->notes = $map['Notes'];
        }

        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }

        if (isset($map['SourceARN'])) {
            $model->sourceARN = $map['SourceARN'];
        }

        if (isset($map['TriggerARN'])) {
            $model->triggerARN = $map['TriggerARN'];
        }

        return $model;
    }
}
