<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PreloadCachesRequest extends Model
{
    /**
     * @description The files to be prefetched.
     *
     * @var string[]
     */
    public $content;

    /**
     * @description By default, prefetch requests include the Accept-Encoding:gzip header. If you want a prefetch request to include other headers or implement multi-replica prefetch, you can specify a custom prefetch header by configuring the Headers parameter.
     *
     * @var string[]
     */
    public $headers;

    /**
     * @description The website ID. You can call the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation to obtain the ID.
     *
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'content' => 'Content',
        'headers' => 'Headers',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreloadCachesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = $map['Content'];
            }
        }
        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
