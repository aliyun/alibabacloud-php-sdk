<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class GetMetaProductListRequest extends Model
{
    /**
     * @var string
     */
    public $listNormal;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'listNormal' => 'ListNormal',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listNormal) {
            $res['ListNormal'] = $this->listNormal;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaProductListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListNormal'])) {
            $model->listNormal = $map['ListNormal'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
