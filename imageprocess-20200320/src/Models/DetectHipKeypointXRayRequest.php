<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DetectHipKeypointXRayRequest extends Model
{
    /**
     * @example dcm
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xuhan/8%E6%9C%88%E4%BB%BD%E5%8C%BB%E7%96%97/sample_dcm_1.dcm
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example 0001
     *
     * @var string
     */
    public $orgId;

    /**
     * @example weiyi
     *
     * @var string
     */
    public $orgName;

    /**
     * @example 123
     *
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'dataFormat' => 'DataFormat',
        'imageUrl'   => 'ImageUrl',
        'orgId'      => 'OrgId',
        'orgName'    => 'OrgName',
        'tracerId'   => 'TracerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectHipKeypointXRayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
