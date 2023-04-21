<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ExportClientEventsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The URL from which you export events.
     *
     * @example https://cn-shanghai-servicemanager.oss-cn-shanghai.aliyuncs.com/A0_CLIENT_EVENT/EDS_Events%20List_20220519234611_w5HuD83KGs.csv?Expires=1652975773&OSSAccessKeyId=LTYL****8tso&Signature=4erMG*********k%3D
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'requestId' => 'RequestId',
        'url'       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportClientEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
