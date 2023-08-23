<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushHotelMessageRequest;

use AlibabaCloud\Tea\Model;

class pushHotelMessageReq extends Model
{
    /**
     * @example e6dd44fd16084db8a60d69fd625d9f0f
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string[]
     */
    public $paramMap;

    /**
     * @example 102
     *
     * @var string
     */
    public $roomNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'hotelId'    => 'HotelId',
        'paramMap'   => 'ParamMap',
        'roomNo'     => 'RoomNo',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->paramMap) {
            $res['ParamMap'] = $this->paramMap;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushHotelMessageReq
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['ParamMap'])) {
            $model->paramMap = $map['ParamMap'];
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
