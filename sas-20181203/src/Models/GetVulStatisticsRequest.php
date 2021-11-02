<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetVulStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $groupIdList;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $typeList;
    protected $_name = [
        'groupIdList' => 'GroupIdList',
        'sourceIp'    => 'SourceIp',
        'typeList'    => 'TypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->typeList) {
            $res['TypeList'] = $this->typeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVulStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupIdList'])) {
            $model->groupIdList = $map['GroupIdList'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TypeList'])) {
            $model->typeList = $map['TypeList'];
        }

        return $model;
    }
}
