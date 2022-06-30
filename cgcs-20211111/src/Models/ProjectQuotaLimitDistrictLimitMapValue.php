<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ProjectQuotaLimitDistrictLimitMapValue extends Model
{
    /**
     * @description 大区ID
     *
     * @var string
     */
    public $districtId;

    /**
     * @description 大区名称
     *
     * @var string
     */
    public $districtName;

    /**
     * @description 上限
     *
     * @var int
     */
    public $maxLimit;
    protected $_name = [
        'districtId'   => 'DistrictId',
        'districtName' => 'DistrictName',
        'maxLimit'     => 'MaxLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->districtName) {
            $res['DistrictName'] = $this->districtName;
        }
        if (null !== $this->maxLimit) {
            $res['MaxLimit'] = $this->maxLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProjectQuotaLimitDistrictLimitMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['DistrictName'])) {
            $model->districtName = $map['DistrictName'];
        }
        if (isset($map['MaxLimit'])) {
            $model->maxLimit = $map['MaxLimit'];
        }

        return $model;
    }
}
