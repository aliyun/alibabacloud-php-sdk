<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomAgentRequest extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var bool
     */
    public $enableTools;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $systemPrompt;

    /**
     * @var string[]
     */
    public $tools;
    protected $_name = [
        'apiId' => 'ApiId',
        'enableTools' => 'EnableTools',
        'name' => 'Name',
        'systemPrompt' => 'SystemPrompt',
        'tools' => 'Tools',
    ];

    public function validate()
    {
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->enableTools) {
            $res['EnableTools'] = $this->enableTools;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->systemPrompt) {
            $res['SystemPrompt'] = $this->systemPrompt;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['Tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['Tools'][$n1] = $item1;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['EnableTools'])) {
            $model->enableTools = $map['EnableTools'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SystemPrompt'])) {
            $model->systemPrompt = $map['SystemPrompt'];
        }

        if (isset($map['Tools'])) {
            if (!empty($map['Tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['Tools'] as $item1) {
                    $model->tools[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
