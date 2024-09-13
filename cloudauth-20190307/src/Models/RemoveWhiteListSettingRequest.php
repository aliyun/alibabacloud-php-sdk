<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class RemoveWhiteListSettingRequest extends Model
{
    /**
     * @var int[]
     */
    public $ids;

    /**
     * @example antcloudauth
     *
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'ids'         => 'Ids',
        'serviceCode' => 'ServiceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveWhiteListSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}
