<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushHotelMessageRequest;

use AlibabaCloud\Dara\Model;

class pushHotelMessageReq extends Model
{
    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string[]
     */
    public $paramMap;

    /**
     * @var string
     */
    public $roomNo;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'hotelId' => 'HotelId',
        'paramMap' => 'ParamMap',
        'roomNo' => 'RoomNo',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->paramMap)) {
            Model::validateArray($this->paramMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->paramMap) {
            if (\is_array($this->paramMap)) {
                $res['ParamMap'] = [];
                foreach ($this->paramMap as $key1 => $value1) {
                    $res['ParamMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['ParamMap'])) {
            if (!empty($map['ParamMap'])) {
                $model->paramMap = [];
                foreach ($map['ParamMap'] as $key1 => $value1) {
                    $model->paramMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
