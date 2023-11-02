<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class GetQuickQueryRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example display_login_ip_search
     *
     * @var string
     */
    public $searchName;
    protected $_name = [
        'regionId'   => 'RegionId',
        'searchName' => 'SearchName',
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
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuickQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}
