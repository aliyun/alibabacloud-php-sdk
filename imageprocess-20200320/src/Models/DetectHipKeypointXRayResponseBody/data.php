<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectHipKeypointXRayResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectHipKeypointXRayResponseBody\data\keyPoints;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xuhan/8%E6%9C%88%E4%BB%BD%E5%8C%BB%E7%96%97/sample_dcm_1.dcm
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @var keyPoints[]
     */
    public $keyPoints;

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
    protected $_name = [
        'imageUrl'  => 'ImageUrl',
        'keyPoints' => 'KeyPoints',
        'orgId'     => 'OrgId',
        'orgName'   => 'OrgName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->keyPoints) {
            $res['KeyPoints'] = [];
            if (null !== $this->keyPoints && \is_array($this->keyPoints)) {
                $n = 0;
                foreach ($this->keyPoints as $item) {
                    $res['KeyPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['KeyPoints'])) {
            if (!empty($map['KeyPoints'])) {
                $model->keyPoints = [];
                $n                = 0;
                foreach ($map['KeyPoints'] as $item) {
                    $model->keyPoints[$n++] = null !== $item ? keyPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        return $model;
    }
}
