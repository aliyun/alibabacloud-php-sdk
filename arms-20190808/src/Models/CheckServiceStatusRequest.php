<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceStatusRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $svcCode;
    protected $_name = [
        'regionId' => 'RegionId',
        'svcCode'  => 'SvcCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->svcCode) {
            $res['SvcCode'] = $this->svcCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SvcCode'])) {
            $model->svcCode = $map['SvcCode'];
        }

        return $model;
    }
}
