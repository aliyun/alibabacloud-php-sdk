<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest;

use AlibabaCloud\Tea\Model;

class multiStreamURL extends Model
{
    /**
     * @description Specifies whether to perform stream relay by using Alibaba Cloud CDN. Valid values:
     *
     *   false: performs stream relay by using a CDN service that is not Alibaba Cloud CDN.
     *   true: performs stream relay by using Alibaba Cloud CDN.
     *
     * >  The default value of this parameter is false.
     *
     * @example false
     *
     * @var bool
     */
    public $isAliCdn;

    /**
     * @description The ingest URL. Only the RTMP format is supported. The URL can be up to 2,048 characters in length. For information about the generation rules of ingest URLs, see [Ingest and streaming URLs](https://help.aliyun.com/document_detail/199339.html).
     *
     * @example rtmp://example.com/live/stream****
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'isAliCdn' => 'IsAliCdn',
        'URL' => 'URL',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isAliCdn) {
            $res['IsAliCdn'] = $this->isAliCdn;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiStreamURL
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsAliCdn'])) {
            $model->isAliCdn = $map['IsAliCdn'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
