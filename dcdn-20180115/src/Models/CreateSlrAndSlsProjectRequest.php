<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateSlrAndSlsProjectRequest extends Model
{
    /**
     * @description The type of the collected logs. Default value: cdn_log_access_l1. Valid values:
     *
     *   **cdn_log_access_l1**: access logs of L1 Dynamic Route for CDN (DCDN) points of presence (POPs)
     *   **cdn_log_origin**: back-to-origin logs
     *   **cdn_log_er**: EdgeRoutine logs
     *
     * @example cdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The region where Log Service resides. Valid values:
     *
     *   **cn-hangzhou**
     *   **cn-shanghai**
     *   **cn-qingdao**
     *   **cn-beijing**
     *   **cn-zhangjiakou**
     *   **cn-shenzhen**
     *   **eu-central-1**
     *   **us-west-1**
     *   **ap-south-1**
     *   **ap-southeast-1**
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'businessType' => 'BusinessType',
        'region'       => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSlrAndSlsProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
