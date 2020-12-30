<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeOssOauthResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $ossServe;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var bool
     */
    public $openOssService;

    /**
     * @var bool
     */
    public $ossAuthorized;

    /**
     * @var int
     */
    public $openOssTime;
    protected $_name = [
        'ossServe'       => 'OssServe',
        'bucketName'     => 'BucketName',
        'openOssService' => 'OpenOssService',
        'ossAuthorized'  => 'OssAuthorized',
        'openOssTime'    => 'OpenOssTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossServe) {
            $res['OssServe'] = $this->ossServe;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->openOssService) {
            $res['OpenOssService'] = $this->openOssService;
        }
        if (null !== $this->ossAuthorized) {
            $res['OssAuthorized'] = $this->ossAuthorized;
        }
        if (null !== $this->openOssTime) {
            $res['OpenOssTime'] = $this->openOssTime;
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
        if (isset($map['OssServe'])) {
            $model->ossServe = $map['OssServe'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['OpenOssService'])) {
            $model->openOssService = $map['OpenOssService'];
        }
        if (isset($map['OssAuthorized'])) {
            $model->ossAuthorized = $map['OssAuthorized'];
        }
        if (isset($map['OpenOssTime'])) {
            $model->openOssTime = $map['OpenOssTime'];
        }

        return $model;
    }
}
