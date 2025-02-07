<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetRealtimeDeliveryFieldResponseBody extends Model
{
    /**
     * @var FieldContentValue[]
     */
    public $fieldContent;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fieldContent' => 'FieldContent',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->fieldContent)) {
            Model::validateArray($this->fieldContent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldContent) {
            if (\is_array($this->fieldContent)) {
                $res['FieldContent'] = [];
                foreach ($this->fieldContent as $key1 => $value1) {
                    $res['FieldContent'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FieldContent'])) {
            if (!empty($map['FieldContent'])) {
                $model->fieldContent = [];
                foreach ($map['FieldContent'] as $key1 => $value1) {
                    $model->fieldContent[$key1] = FieldContentValue::fromMap($value1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
