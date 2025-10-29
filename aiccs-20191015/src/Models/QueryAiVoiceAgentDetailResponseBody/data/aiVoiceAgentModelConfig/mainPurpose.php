<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig\mainPurpose\mainPurposeEnum;

class mainPurpose extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $mainPurposeDescription;

    /**
     * @var mainPurposeEnum[]
     */
    public $mainPurposeEnum;

    /**
     * @var string
     */
    public $mainPurposeName;

    /**
     * @var string
     */
    public $mainPurposeType;
    protected $_name = [
        'id' => 'Id',
        'mainPurposeDescription' => 'MainPurposeDescription',
        'mainPurposeEnum' => 'MainPurposeEnum',
        'mainPurposeName' => 'MainPurposeName',
        'mainPurposeType' => 'MainPurposeType',
    ];

    public function validate()
    {
        if (\is_array($this->mainPurposeEnum)) {
            Model::validateArray($this->mainPurposeEnum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mainPurposeDescription) {
            $res['MainPurposeDescription'] = $this->mainPurposeDescription;
        }

        if (null !== $this->mainPurposeEnum) {
            if (\is_array($this->mainPurposeEnum)) {
                $res['MainPurposeEnum'] = [];
                $n1 = 0;
                foreach ($this->mainPurposeEnum as $item1) {
                    $res['MainPurposeEnum'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mainPurposeName) {
            $res['MainPurposeName'] = $this->mainPurposeName;
        }

        if (null !== $this->mainPurposeType) {
            $res['MainPurposeType'] = $this->mainPurposeType;
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

        if (isset($map['MainPurposeDescription'])) {
            $model->mainPurposeDescription = $map['MainPurposeDescription'];
        }

        if (isset($map['MainPurposeEnum'])) {
            if (!empty($map['MainPurposeEnum'])) {
                $model->mainPurposeEnum = [];
                $n1 = 0;
                foreach ($map['MainPurposeEnum'] as $item1) {
                    $model->mainPurposeEnum[$n1] = mainPurposeEnum::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MainPurposeName'])) {
            $model->mainPurposeName = $map['MainPurposeName'];
        }

        if (isset($map['MainPurposeType'])) {
            $model->mainPurposeType = $map['MainPurposeType'];
        }

        return $model;
    }
}
