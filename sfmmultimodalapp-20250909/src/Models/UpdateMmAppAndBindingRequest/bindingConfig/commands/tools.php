<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\bindingConfig\commands;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\bindingConfig\commands\tools\toolExamples;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\bindingConfig\commands\tools\toolParams;

class tools extends Model
{
    /**
     * @var string
     */
    public $replyMode;

    /**
     * @var string
     */
    public $toolDescription;

    /**
     * @var toolExamples[]
     */
    public $toolExamples;

    /**
     * @var string
     */
    public $toolId;

    /**
     * @var string
     */
    public $toolName;

    /**
     * @var toolParams[]
     */
    public $toolParams;
    protected $_name = [
        'replyMode' => 'ReplyMode',
        'toolDescription' => 'ToolDescription',
        'toolExamples' => 'ToolExamples',
        'toolId' => 'ToolId',
        'toolName' => 'ToolName',
        'toolParams' => 'ToolParams',
    ];

    public function validate()
    {
        if (\is_array($this->toolExamples)) {
            Model::validateArray($this->toolExamples);
        }
        if (\is_array($this->toolParams)) {
            Model::validateArray($this->toolParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->replyMode) {
            $res['ReplyMode'] = $this->replyMode;
        }

        if (null !== $this->toolDescription) {
            $res['ToolDescription'] = $this->toolDescription;
        }

        if (null !== $this->toolExamples) {
            if (\is_array($this->toolExamples)) {
                $res['ToolExamples'] = [];
                $n1 = 0;
                foreach ($this->toolExamples as $item1) {
                    $res['ToolExamples'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toolId) {
            $res['ToolId'] = $this->toolId;
        }

        if (null !== $this->toolName) {
            $res['ToolName'] = $this->toolName;
        }

        if (null !== $this->toolParams) {
            if (\is_array($this->toolParams)) {
                $res['ToolParams'] = [];
                $n1 = 0;
                foreach ($this->toolParams as $item1) {
                    $res['ToolParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ReplyMode'])) {
            $model->replyMode = $map['ReplyMode'];
        }

        if (isset($map['ToolDescription'])) {
            $model->toolDescription = $map['ToolDescription'];
        }

        if (isset($map['ToolExamples'])) {
            if (!empty($map['ToolExamples'])) {
                $model->toolExamples = [];
                $n1 = 0;
                foreach ($map['ToolExamples'] as $item1) {
                    $model->toolExamples[$n1] = toolExamples::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ToolId'])) {
            $model->toolId = $map['ToolId'];
        }

        if (isset($map['ToolName'])) {
            $model->toolName = $map['ToolName'];
        }

        if (isset($map['ToolParams'])) {
            if (!empty($map['ToolParams'])) {
                $model->toolParams = [];
                $n1 = 0;
                foreach ($map['ToolParams'] as $item1) {
                    $model->toolParams[$n1] = toolParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
