<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecuritiesResponseBody\appSecuritys;

use AlibabaCloud\Tea\Model;

class appSecurity extends Model
{
    /**
     * @example d2350ecd62c44cbfbe35a7f182e35105
     *
     * @var string
     */
    public $appCode;

    /**
     * @example 34379343
     *
     * @var string
     */
    public $appKey;

    /**
     * @example ea5291a7aff343769eb3139a2f6de8c9
     *
     * @var string
     */
    public $appSecret;

    /**
     * @example 2021-09-14T18:50:59
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 2023-08-14T18:03:00+08:00
     *
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'appCode'      => 'AppCode',
        'appKey'       => 'AppKey',
        'appSecret'    => 'AppSecret',
        'createdTime'  => 'CreatedTime',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appSecurity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
