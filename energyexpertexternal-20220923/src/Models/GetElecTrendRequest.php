<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GetElecTrendRequest extends Model
{
    /**
     * @description The enterprise code.
     *
     * @example C-20240115-3
     *
     * @var string
     */
    public $code;

    /**
     * @description List of years.
     *
     * @var int[]
     */
    public $yearList;
    protected $_name = [
        'code'     => 'code',
        'yearList' => 'yearList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->yearList) {
            $res['yearList'] = $this->yearList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetElecTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['yearList'])) {
            if (!empty($map['yearList'])) {
                $model->yearList = $map['yearList'];
            }
        }

        return $model;
    }
}
