<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAppKeyPageResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $androidSdkUrl;

    /**
     * @var string
     */
    public $androidSdkVersion;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $iosSdkUrl;

    /**
     * @var string
     */
    public $iosSdkVersion;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $sdkItems;

    /**
     * @var string
     */
    public $used;
    protected $_name = [
        'androidSdkUrl'     => 'androidSdkUrl',
        'androidSdkVersion' => 'androidSdkVersion',
        'appKey'            => 'appKey',
        'gmtCreate'         => 'gmtCreate',
        'iosSdkUrl'         => 'iosSdkUrl',
        'iosSdkVersion'     => 'iosSdkVersion',
        'memo'              => 'memo',
        'sdkItems'          => 'sdkItems',
        'used'              => 'used',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidSdkUrl) {
            $res['androidSdkUrl'] = $this->androidSdkUrl;
        }
        if (null !== $this->androidSdkVersion) {
            $res['androidSdkVersion'] = $this->androidSdkVersion;
        }
        if (null !== $this->appKey) {
            $res['appKey'] = $this->appKey;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->iosSdkUrl) {
            $res['iosSdkUrl'] = $this->iosSdkUrl;
        }
        if (null !== $this->iosSdkVersion) {
            $res['iosSdkVersion'] = $this->iosSdkVersion;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->sdkItems) {
            $res['sdkItems'] = $this->sdkItems;
        }
        if (null !== $this->used) {
            $res['used'] = $this->used;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['androidSdkUrl'])) {
            $model->androidSdkUrl = $map['androidSdkUrl'];
        }
        if (isset($map['androidSdkVersion'])) {
            $model->androidSdkVersion = $map['androidSdkVersion'];
        }
        if (isset($map['appKey'])) {
            $model->appKey = $map['appKey'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['iosSdkUrl'])) {
            $model->iosSdkUrl = $map['iosSdkUrl'];
        }
        if (isset($map['iosSdkVersion'])) {
            $model->iosSdkVersion = $map['iosSdkVersion'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['sdkItems'])) {
            $model->sdkItems = $map['sdkItems'];
        }
        if (isset($map['used'])) {
            $model->used = $map['used'];
        }

        return $model;
    }
}
