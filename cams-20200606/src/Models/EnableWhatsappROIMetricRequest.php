<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class EnableWhatsappROIMetricRequest extends Model
{
    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'isvCode'     => 'IsvCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableWhatsappROIMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }

        return $model;
    }
}
