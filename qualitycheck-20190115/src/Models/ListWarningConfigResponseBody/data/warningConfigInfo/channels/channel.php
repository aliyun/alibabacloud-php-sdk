<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo\channels;

use AlibabaCloud\Tea\Model;

class channel extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @example oapi.dingtalk.com/robot/send?access_token=c55628f700eb9ad2a3ca
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'type' => 'Type',
        'url'  => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
