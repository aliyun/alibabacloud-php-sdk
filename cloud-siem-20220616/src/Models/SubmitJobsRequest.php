<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class SubmitJobsRequest extends Model
{
    /**
     * @description The parameters of the logs that you want to add. The value is a JSON array, which contains the following parameters:\
     *
     *
     *   SourceProdCode: the code of the cloud service.
     *
     *   SourceLogCode: the code of the log.
     *
     *   Deleted: specifies whether to add the log. Valid values:
     *
     *   0: yes
     *   1: no
     *
     * @example [{"SourceLogCode":"cloud_siem_aegis_health_check","SourceProdCode":"sas","SubUserId":120xxxxxxx,"Deleted":0},{"SourceLogCode":"cloud_siem_aegis_health_check","SourceProdCode":"sas","SubUserId":121xxxxxxxx,"Deleted":0},{"SourceLogCode":"cloud_siem_aegis_health_check","SourceProdCode":"sas","SubUserId":122xxxxxxx,"Deleted":1}]
     *
     * @var string
     */
    public $jsonParam;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
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
