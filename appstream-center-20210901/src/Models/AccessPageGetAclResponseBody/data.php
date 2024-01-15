<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AccessPageGetAclResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example FREE_ACCESS
     *
     * @var string
     */
    public $accessMode;

    /**
     * @example https://wuying.aliyun.com/native-solution/cloud-flow/view?id=a-075nu7bcqim2wvxli&token=8141B1A674D48ACB8E5D2D6CE53FDB2F3CF8710A5F8F78578D5254BC6F******
     *
     * @var string
     */
    public $accessUrl;

    /**
     * @example 2023-02-08T03:52Z
     *
     * @var int
     */
    public $effectTime;

    /**
     * @example hour
     *
     * @var string
     */
    public $unit;

    /**
     * @example 2023-12-05 14:28:20
     *
     * @var string
     */
    public $urlExpireTime;
    protected $_name = [
        'accessMode'    => 'AccessMode',
        'accessUrl'     => 'AccessUrl',
        'effectTime'    => 'EffectTime',
        'unit'          => 'Unit',
        'urlExpireTime' => 'UrlExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->accessUrl) {
            $res['AccessUrl'] = $this->accessUrl;
        }
        if (null !== $this->effectTime) {
            $res['EffectTime'] = $this->effectTime;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->urlExpireTime) {
            $res['UrlExpireTime'] = $this->urlExpireTime;
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
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['AccessUrl'])) {
            $model->accessUrl = $map['AccessUrl'];
        }
        if (isset($map['EffectTime'])) {
            $model->effectTime = $map['EffectTime'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['UrlExpireTime'])) {
            $model->urlExpireTime = $map['UrlExpireTime'];
        }

        return $model;
    }
}
