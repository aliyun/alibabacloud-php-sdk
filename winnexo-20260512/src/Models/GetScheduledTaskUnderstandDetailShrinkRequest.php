<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetScheduledTaskUnderstandDetailShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $digitalEmployeeNameShrink;

    /**
     * @var string
     */
    public $segmentsShrink;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userInput;
    protected $_name = [
        'collaborationGroupId' => 'collaborationGroupId',
        'digitalEmployeeNameShrink' => 'digitalEmployeeName',
        'segmentsShrink' => 'segments',
        'tenantId' => 'tenantId',
        'userInput' => 'userInput',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->digitalEmployeeNameShrink) {
            $res['digitalEmployeeName'] = $this->digitalEmployeeNameShrink;
        }

        if (null !== $this->segmentsShrink) {
            $res['segments'] = $this->segmentsShrink;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userInput) {
            $res['userInput'] = $this->userInput;
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
        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['digitalEmployeeName'])) {
            $model->digitalEmployeeNameShrink = $map['digitalEmployeeName'];
        }

        if (isset($map['segments'])) {
            $model->segmentsShrink = $map['segments'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userInput'])) {
            $model->userInput = $map['userInput'];
        }

        return $model;
    }
}
