<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListWatermarkRequest extends Model
{
    /**
     * @description The ID of the application. Default value: **app-1000000**.
     *
     * If you have activated the multi-application service, specify the ID of the application to query all image and text watermark templates in the specified application. If you leave this parameter empty, image and text watermark templates in all applications are queried. For more information, see [Overview](https://help.aliyun.com/document_detail/113600.html).
     * @example app-****
     *
     * @var string
     */
    public $appId;
    protected $_name = [
        'appId' => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
