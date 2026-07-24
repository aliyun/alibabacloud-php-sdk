<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\voiceprintResponse\dialogue;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\voiceprintResponse\errors;

class voiceprintResponse extends Model
{
    /**
     * @var dialogue[]
     */
    public $dialogue;

    /**
     * @var errors[]
     */
    public $errors;
    protected $_name = [
        'dialogue' => 'Dialogue',
        'errors' => 'Errors',
    ];

    public function validate()
    {
        if (\is_array($this->dialogue)) {
            Model::validateArray($this->dialogue);
        }
        if (\is_array($this->errors)) {
            Model::validateArray($this->errors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogue) {
            if (\is_array($this->dialogue)) {
                $res['Dialogue'] = [];
                $n1 = 0;
                foreach ($this->dialogue as $item1) {
                    $res['Dialogue'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errors) {
            if (\is_array($this->errors)) {
                $res['Errors'] = [];
                $n1 = 0;
                foreach ($this->errors as $item1) {
                    $res['Errors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Dialogue'])) {
            if (!empty($map['Dialogue'])) {
                $model->dialogue = [];
                $n1 = 0;
                foreach ($map['Dialogue'] as $item1) {
                    $model->dialogue[$n1] = dialogue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Errors'])) {
            if (!empty($map['Errors'])) {
                $model->errors = [];
                $n1 = 0;
                foreach ($map['Errors'] as $item1) {
                    $model->errors[$n1] = errors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
