<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricProfilingResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricProfilingResponseBody\svgUrls\svgInfo;
use AlibabaCloud\Tea\Model;

class svgUrls extends Model
{
    /**
     * @var svgInfo[]
     */
    public $svgInfo;
    protected $_name = [
        'svgInfo' => 'SvgInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->svgInfo) {
            $res['SvgInfo'] = [];
            if (null !== $this->svgInfo && \is_array($this->svgInfo)) {
                $n = 0;
                foreach ($this->svgInfo as $item) {
                    $res['SvgInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return svgUrls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SvgInfo'])) {
            if (!empty($map['SvgInfo'])) {
                $model->svgInfo = [];
                $n              = 0;
                foreach ($map['SvgInfo'] as $item) {
                    $model->svgInfo[$n++] = null !== $item ? svgInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
