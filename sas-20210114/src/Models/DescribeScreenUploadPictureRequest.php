<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class DescribeScreenUploadPictureRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example https://security-pic.oss-cn-hangzhou.aliyuncs.com/screenLogo/1766185894104675/c28bd4d2-c5c1-43f8-9ef5-de41d762xxxx
     *
     * @var string
     */
    public $logoUrl;
    protected $_name = [
        'logoUrl' => 'LogoUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenUploadPictureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }

        return $model;
    }
}
