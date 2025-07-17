<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRumAppResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The domain name of the SDK.
     *
     * @example bxxxxxxx-sdk.rum.aliyuncs.com/v2/browser-sdk.js
     *
     * @var string
     */
    public $cdnDomain;

    /**
     * @description The endpoint that is used to report application data.
     *
     * @example xxxxxxxx-default-cn.rum.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The process ID (PID) of the application.
     *
     * @example avccccxxxx@24cxxxxbf384dc6
     *
     * @var string
     */
    public $pid;
    protected $_name = [
        'cdnDomain' => 'CdnDomain',
        'endpoint' => 'Endpoint',
        'pid' => 'Pid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnDomain) {
            $res['CdnDomain'] = $this->cdnDomain;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
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
        if (isset($map['CdnDomain'])) {
            $model->cdnDomain = $map['CdnDomain'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
