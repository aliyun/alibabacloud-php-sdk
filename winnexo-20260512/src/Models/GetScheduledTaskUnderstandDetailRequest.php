<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskUnderstandDetailRequest\segments;

class GetScheduledTaskUnderstandDetailRequest extends Model
{
    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string[]
     */
    public $digitalEmployeeName;

    /**
     * @var segments[]
     */
    public $segments;

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
        'digitalEmployeeName' => 'digitalEmployeeName',
        'segments' => 'segments',
        'tenantId' => 'tenantId',
        'userInput' => 'userInput',
    ];

    public function validate()
    {
        if (\is_array($this->digitalEmployeeName)) {
            Model::validateArray($this->digitalEmployeeName);
        }
        if (\is_array($this->segments)) {
            Model::validateArray($this->segments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->digitalEmployeeName) {
            if (\is_array($this->digitalEmployeeName)) {
                $res['digitalEmployeeName'] = [];
                $n1 = 0;
                foreach ($this->digitalEmployeeName as $item1) {
                    $res['digitalEmployeeName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->segments) {
            if (\is_array($this->segments)) {
                $res['segments'] = [];
                $n1 = 0;
                foreach ($this->segments as $item1) {
                    $res['segments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['digitalEmployeeName'])) {
                $model->digitalEmployeeName = [];
                $n1 = 0;
                foreach ($map['digitalEmployeeName'] as $item1) {
                    $model->digitalEmployeeName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['segments'])) {
            if (!empty($map['segments'])) {
                $model->segments = [];
                $n1 = 0;
                foreach ($map['segments'] as $item1) {
                    $model->segments[$n1] = segments::fromMap($item1);
                    ++$n1;
                }
            }
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
