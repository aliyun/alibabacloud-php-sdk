<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationImageRequest extends Model
{
    /**
     * @description d700e680-aa4d-4ec1-afc2-6566b5ff\\*\\*\\*\\*
     *
     * This parameter is required.
     * @example d700e680-aa4d-4ec1-afc2-6566b5ff****
     *
     * @var string
     */
    public $appId;

    /**
     * @description registry-vpc.cn-hangzhou.aliyuncs.com/demo/demo:latest
     *
     * This parameter is required.
     * @example registry-vpc.cn-hangzhou.aliyuncs.com/demo/demo:latest
     *
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'appId'    => 'AppId',
        'imageUrl' => 'ImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}
