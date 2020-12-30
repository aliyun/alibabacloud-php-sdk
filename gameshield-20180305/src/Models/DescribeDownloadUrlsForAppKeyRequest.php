<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DescribeDownloadUrlsForAppKeyRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appKeyVersion;
    protected $_name = [
        'sourceIp'      => 'SourceIp',
        'lang'          => 'Lang',
        'appId'         => 'AppId',
        'appKeyVersion' => 'AppKeyVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appKeyVersion) {
            $res['AppKeyVersion'] = $this->appKeyVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDownloadUrlsForAppKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppKeyVersion'])) {
            $model->appKeyVersion = $map['AppKeyVersion'];
        }

        return $model;
    }
}
