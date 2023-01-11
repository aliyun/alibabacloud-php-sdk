<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class GetCardFlowInfoRequest extends Model
{
    /**
     * @example ["202110","202111"]
     *
     * @var string[]
     */
    public $dateList;

    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;
    protected $_name = [
        'dateList' => 'DateList',
        'iccid'    => 'Iccid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateList) {
            $res['DateList'] = $this->dateList;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCardFlowInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateList'])) {
            if (!empty($map['DateList'])) {
                $model->dateList = $map['DateList'];
            }
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }

        return $model;
    }
}
