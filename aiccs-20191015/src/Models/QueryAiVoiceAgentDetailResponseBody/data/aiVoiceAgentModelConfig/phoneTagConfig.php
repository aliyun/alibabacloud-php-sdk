<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig\phoneTagConfig\phoneTagEnum;

class phoneTagConfig extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $phoneTagDescription;

    /**
     * @var phoneTagEnum[]
     */
    public $phoneTagEnum;

    /**
     * @var string
     */
    public $phoneTagKey;

    /**
     * @var string
     */
    public $phoneTagName;

    /**
     * @var bool
     */
    public $phoneTagRequired;

    /**
     * @var string
     */
    public $phoneTagSource;

    /**
     * @var string
     */
    public $phoneTagType;
    protected $_name = [
        'id' => 'Id',
        'phoneTagDescription' => 'PhoneTagDescription',
        'phoneTagEnum' => 'PhoneTagEnum',
        'phoneTagKey' => 'PhoneTagKey',
        'phoneTagName' => 'PhoneTagName',
        'phoneTagRequired' => 'PhoneTagRequired',
        'phoneTagSource' => 'PhoneTagSource',
        'phoneTagType' => 'PhoneTagType',
    ];

    public function validate()
    {
        if (\is_array($this->phoneTagEnum)) {
            Model::validateArray($this->phoneTagEnum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->phoneTagDescription) {
            $res['PhoneTagDescription'] = $this->phoneTagDescription;
        }

        if (null !== $this->phoneTagEnum) {
            if (\is_array($this->phoneTagEnum)) {
                $res['PhoneTagEnum'] = [];
                $n1 = 0;
                foreach ($this->phoneTagEnum as $item1) {
                    $res['PhoneTagEnum'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->phoneTagKey) {
            $res['PhoneTagKey'] = $this->phoneTagKey;
        }

        if (null !== $this->phoneTagName) {
            $res['PhoneTagName'] = $this->phoneTagName;
        }

        if (null !== $this->phoneTagRequired) {
            $res['PhoneTagRequired'] = $this->phoneTagRequired;
        }

        if (null !== $this->phoneTagSource) {
            $res['PhoneTagSource'] = $this->phoneTagSource;
        }

        if (null !== $this->phoneTagType) {
            $res['PhoneTagType'] = $this->phoneTagType;
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

        if (isset($map['PhoneTagDescription'])) {
            $model->phoneTagDescription = $map['PhoneTagDescription'];
        }

        if (isset($map['PhoneTagEnum'])) {
            if (!empty($map['PhoneTagEnum'])) {
                $model->phoneTagEnum = [];
                $n1 = 0;
                foreach ($map['PhoneTagEnum'] as $item1) {
                    $model->phoneTagEnum[$n1] = phoneTagEnum::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PhoneTagKey'])) {
            $model->phoneTagKey = $map['PhoneTagKey'];
        }

        if (isset($map['PhoneTagName'])) {
            $model->phoneTagName = $map['PhoneTagName'];
        }

        if (isset($map['PhoneTagRequired'])) {
            $model->phoneTagRequired = $map['PhoneTagRequired'];
        }

        if (isset($map['PhoneTagSource'])) {
            $model->phoneTagSource = $map['PhoneTagSource'];
        }

        if (isset($map['PhoneTagType'])) {
            $model->phoneTagType = $map['PhoneTagType'];
        }

        return $model;
    }
}
