<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest;

use AlibabaCloud\Dara\Model;

class flowAction extends Model
{
    /**
     * @var mixed[]
     */
    public $flowActionData;

    /**
     * @var string
     */
    public $flowToken;
    protected $_name = [
        'flowActionData' => 'FlowActionData',
        'flowToken' => 'FlowToken',
    ];

    public function validate()
    {
        if (\is_array($this->flowActionData)) {
            Model::validateArray($this->flowActionData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowActionData) {
            if (\is_array($this->flowActionData)) {
                $res['FlowActionData'] = [];
                foreach ($this->flowActionData as $key1 => $value1) {
                    $res['FlowActionData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->flowToken) {
            $res['FlowToken'] = $this->flowToken;
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
        if (isset($map['FlowActionData'])) {
            if (!empty($map['FlowActionData'])) {
                $model->flowActionData = [];
                foreach ($map['FlowActionData'] as $key1 => $value1) {
                    $model->flowActionData[$key1] = $value1;
                }
            }
        }

        if (isset($map['FlowToken'])) {
            $model->flowToken = $map['FlowToken'];
        }

        return $model;
    }
}
