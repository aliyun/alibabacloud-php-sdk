<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobStatusRequest extends Model
{
    /**
     * @description The region where the service resides. Default value: cn-shanghai.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the collection task. The ID is the value of the submitId parameter in the response of the [BatchJobSubmit](https://next.api.aliyun.com/api/cloud-siem/2022-06-16/BatchSubmitJob?lang=JAVA\\&useCommon=true) operation.
     *
     * This parameter is required.
     * @example xxxxx_folder_xxxxxx
     *
     * @var string
     */
    public $submitId;
    protected $_name = [
        'regionId' => 'RegionId',
        'submitId' => 'SubmitId',
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
        if (null !== $this->submitId) {
            $res['SubmitId'] = $this->submitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubmitId'])) {
            $model->submitId = $map['SubmitId'];
        }

        return $model;
    }
}
