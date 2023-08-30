<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class HTTPTrigger extends Model
{
    /**
     * @example https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run
     *
     * @var string
     */
    public $urlInternet;

    /**
     * @example https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run
     *
     * @var string
     */
    public $urlIntranet;
    protected $_name = [
        'urlInternet' => 'urlInternet',
        'urlIntranet' => 'urlIntranet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->urlInternet) {
            $res['urlInternet'] = $this->urlInternet;
        }
        if (null !== $this->urlIntranet) {
            $res['urlIntranet'] = $this->urlIntranet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HTTPTrigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['urlInternet'])) {
            $model->urlInternet = $map['urlInternet'];
        }
        if (isset($map['urlIntranet'])) {
            $model->urlIntranet = $map['urlIntranet'];
        }

        return $model;
    }
}
