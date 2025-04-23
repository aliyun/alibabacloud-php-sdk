<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricProfilingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricProfilingResponseBody\svgUrls\svgInfo;

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
        if (\is_array($this->svgInfo)) {
            Model::validateArray($this->svgInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->svgInfo) {
            if (\is_array($this->svgInfo)) {
                $res['SvgInfo'] = [];
                $n1 = 0;
                foreach ($this->svgInfo as $item1) {
                    $res['SvgInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SvgInfo'])) {
            if (!empty($map['SvgInfo'])) {
                $model->svgInfo = [];
                $n1 = 0;
                foreach ($map['SvgInfo'] as $item1) {
                    $model->svgInfo[$n1++] = svgInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
