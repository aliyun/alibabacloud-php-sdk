<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ListFormRemarksResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $formRemarkVoMap;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $vendorRequestId;
    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'formRemarkVoMap' => 'formRemarkVoMap',
        'requestId'       => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType'      => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->formRemarkVoMap)) {
            Model::validateArray($this->formRemarkVoMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->formRemarkVoMap) {
            if (\is_array($this->formRemarkVoMap)) {
                $res['formRemarkVoMap'] = [];
                foreach ($this->formRemarkVoMap as $key1 => $value1) {
                    $res['formRemarkVoMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['formRemarkVoMap'])) {
            if (!empty($map['formRemarkVoMap'])) {
                $model->formRemarkVoMap = [];
                foreach ($map['formRemarkVoMap'] as $key1 => $value1) {
                    $model->formRemarkVoMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
