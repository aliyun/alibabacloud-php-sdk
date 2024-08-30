<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlV2ResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://arms-apm-cn-hangzhou.oss-cn-hangzhou-internal.aliyuncs.com/3.2.9/ArmsAgent.zip
     *
     * @var string
     */
    public $url;

    /**
     * @example 3.2.9
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'url'     => 'Url',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
