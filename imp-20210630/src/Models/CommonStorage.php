<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CommonStorage extends Model
{
    /**
     * @description OSS bucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @description OSS object path
     *
     * @var string
     */
    public $object;

    /**
     * @description 阿里云Region，比如 cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description OSS的签名URL
     *
     * @var string
     */
    public $signUrl;

    /**
     * @description Security Token Service
     *
     * @var CommonSTS
     */
    public $sts;
    protected $_name = [
        'bucket'  => 'Bucket',
        'object'  => 'Object',
        'region'  => 'Region',
        'signUrl' => 'SignUrl',
        'sts'     => 'Sts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->signUrl) {
            $res['SignUrl'] = $this->signUrl;
        }
        if (null !== $this->sts) {
            $res['Sts'] = null !== $this->sts ? $this->sts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommonStorage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SignUrl'])) {
            $model->signUrl = $map['SignUrl'];
        }
        if (isset($map['Sts'])) {
            $model->sts = CommonSTS::fromMap($map['Sts']);
        }

        return $model;
    }
}
