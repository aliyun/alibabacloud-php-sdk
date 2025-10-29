<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig\outputTagConfig\outputTagEnum;

class outputTagConfig extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $outputTagDescription;

    /**
     * @var outputTagEnum[]
     */
    public $outputTagEnum;

    /**
     * @var string
     */
    public $outputTagName;

    /**
     * @var string
     */
    public $outputTagType;
    protected $_name = [
        'id' => 'Id',
        'outputTagDescription' => 'OutputTagDescription',
        'outputTagEnum' => 'OutputTagEnum',
        'outputTagName' => 'OutputTagName',
        'outputTagType' => 'OutputTagType',
    ];

    public function validate()
    {
        if (\is_array($this->outputTagEnum)) {
            Model::validateArray($this->outputTagEnum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->outputTagDescription) {
            $res['OutputTagDescription'] = $this->outputTagDescription;
        }

        if (null !== $this->outputTagEnum) {
            if (\is_array($this->outputTagEnum)) {
                $res['OutputTagEnum'] = [];
                $n1 = 0;
                foreach ($this->outputTagEnum as $item1) {
                    $res['OutputTagEnum'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outputTagName) {
            $res['OutputTagName'] = $this->outputTagName;
        }

        if (null !== $this->outputTagType) {
            $res['OutputTagType'] = $this->outputTagType;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OutputTagDescription'])) {
            $model->outputTagDescription = $map['OutputTagDescription'];
        }

        if (isset($map['OutputTagEnum'])) {
            if (!empty($map['OutputTagEnum'])) {
                $model->outputTagEnum = [];
                $n1 = 0;
                foreach ($map['OutputTagEnum'] as $item1) {
                    $model->outputTagEnum[$n1] = outputTagEnum::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OutputTagName'])) {
            $model->outputTagName = $map['OutputTagName'];
        }

        if (isset($map['OutputTagType'])) {
            $model->outputTagType = $map['OutputTagType'];
        }

        return $model;
    }
}
