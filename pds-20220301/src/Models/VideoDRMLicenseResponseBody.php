<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class VideoDRMLicenseResponseBody extends Model
{
    /**
     * @description The returned DRM license.
     *
     * @example cb9swCy8P50H9KePsxET3jZ1tm41bDs9HTsxbWnsjf3bsf6QGdiS4kZPhDaskimbNyAfNjmhQRmWFt3AhwNF3
     *
     * @var string
     */
    public $data;

    /**
     * @description The information about the device from which the DRM request was initiated.
     *
     * @example ""
     *
     * @var string
     */
    public $deviceInfo;

    /**
     * @description The request state returned by the DRM server.
     *
     * @example 0
     *
     * @var string
     */
    public $states;
    protected $_name = [
        'data' => 'data',
        'deviceInfo' => 'device_info',
        'states' => 'states',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->deviceInfo) {
            $res['device_info'] = $this->deviceInfo;
        }
        if (null !== $this->states) {
            $res['states'] = $this->states;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VideoDRMLicenseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['device_info'])) {
            $model->deviceInfo = $map['device_info'];
        }
        if (isset($map['states'])) {
            $model->states = $map['states'];
        }

        return $model;
    }
}
