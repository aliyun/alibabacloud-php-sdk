<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class UpdateFCTriggerRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $triggerARN;

    /**
     * @var string
     */
    public $sourceARN;

    /**
     * @var string
     */
    public $functionARN;

    /**
     * @var string
     */
    public $roleARN;

    /**
     * @var string
     */
    public $notes;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'triggerARN'  => 'TriggerARN',
        'sourceARN'   => 'SourceARN',
        'functionARN' => 'FunctionARN',
        'roleARN'     => 'RoleARN',
        'notes'       => 'Notes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->triggerARN) {
            $res['TriggerARN'] = $this->triggerARN;
        }
        if (null !== $this->sourceARN) {
            $res['SourceARN'] = $this->sourceARN;
        }
        if (null !== $this->functionARN) {
            $res['FunctionARN'] = $this->functionARN;
        }
        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }
        if (null !== $this->notes) {
            $res['Notes'] = $this->notes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFCTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['TriggerARN'])) {
            $model->triggerARN = $map['TriggerARN'];
        }
        if (isset($map['SourceARN'])) {
            $model->sourceARN = $map['SourceARN'];
        }
        if (isset($map['FunctionARN'])) {
            $model->functionARN = $map['FunctionARN'];
        }
        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }
        if (isset($map['Notes'])) {
            $model->notes = $map['Notes'];
        }

        return $model;
    }
}
