<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetAppInfosRequest extends Model
{
    /**
     * @description The IDs of applications. You can obtain application IDs from the response to the [CreateAppInfo](https://help.aliyun.com/document_detail/113266.html) or [ListAppInfo](https://help.aliyun.com/document_detail/114000.html) operation.
     *
     *   You can specify a maximum of 10 application IDs.
     *   Separate application IDs with commas (,).
     *
     * This parameter is required.
     * @example app-****
     *
     * @var string
     */
    public $appIds;
    protected $_name = [
        'appIds' => 'AppIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }

        return $model;
    }
}
