<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppInfosResponseBody\appInfoList;
use AlibabaCloud\Tea\Model;

class GetAppInfosResponseBody extends Model
{
    /**
     * @description The details of each application.
     *
     * @var appInfoList[]
     */
    public $appInfoList;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The IDs of applications that do not exist.
     *
     * @var string[]
     */
    public $nonExistAppIds;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4A13-4DC4-D7393642****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appInfoList'    => 'AppInfoList',
        'code'           => 'Code',
        'nonExistAppIds' => 'NonExistAppIds',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfoList) {
            $res['AppInfoList'] = [];
            if (null !== $this->appInfoList && \is_array($this->appInfoList)) {
                $n = 0;
                foreach ($this->appInfoList as $item) {
                    $res['AppInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->nonExistAppIds) {
            $res['NonExistAppIds'] = $this->nonExistAppIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInfoList'])) {
            if (!empty($map['AppInfoList'])) {
                $model->appInfoList = [];
                $n                  = 0;
                foreach ($map['AppInfoList'] as $item) {
                    $model->appInfoList[$n++] = null !== $item ? appInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['NonExistAppIds'])) {
            if (!empty($map['NonExistAppIds'])) {
                $model->nonExistAppIds = $map['NonExistAppIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
