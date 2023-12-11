<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class SubmitJobsRequest extends Model
{
    /**
     * @example [{"SourceLogCode":"cloud_siem_aegis_health_check","SourceProdCode":"sas","SubUserId":120xxxxxxx,"Deleted":0},{"SourceLogCode":"cloud_siem_aegis_health_check","SourceProdCode":"sas","SubUserId":121xxxxxxxx,"Deleted":0},{"SourceLogCode":"cloud_siem_aegis_health_check","SourceProdCode":"sas","SubUserId":122xxxxxxx,"Deleted":1}]
     *
     * @var string
     */
    public $jsonParam;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'jsonParam' => 'JsonParam',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jsonParam) {
            $res['JsonParam'] = $this->jsonParam;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JsonParam'])) {
            $model->jsonParam = $map['JsonParam'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
