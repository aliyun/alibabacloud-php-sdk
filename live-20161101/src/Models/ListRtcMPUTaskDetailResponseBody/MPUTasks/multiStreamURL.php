<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks;

use AlibabaCloud\Tea\Model;

class multiStreamURL extends Model
{
    /**
     * @description Indicates whether stream relay is performed by using Alibaba Cloud CDN. Valid values:
     *
     *   false: Stream relay is performed by using a CDN service that is not Alibaba Cloud CDN.
     *   true: Stream relay is performed by using Alibaba Cloud CDN.
     *
     * @example false
     *
     * @var bool
     */
    public $isAliCdn;

    /**
     * @description The ingest URL.
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
