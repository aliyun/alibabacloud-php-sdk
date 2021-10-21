<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class FillLogisticsRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $logistics;
    protected $_name = [
        'bizId'     => 'BizId',
        'logistics' => 'Logistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->logistics) {
            $res['Logistics'] = $this->logistics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FillLogisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Logistics'])) {
            $model->logistics = $map['Logistics'];
        }

        return $model;
    }
}
