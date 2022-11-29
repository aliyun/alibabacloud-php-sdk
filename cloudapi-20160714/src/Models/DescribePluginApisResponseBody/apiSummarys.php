<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginApisResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginApisResponseBody\apiSummarys\apiPluginSummary;
use AlibabaCloud\Tea\Model;

class apiSummarys extends Model
{
    /**
     * @var apiPluginSummary[]
     */
    public $apiPluginSummary;
    protected $_name = [
        'apiPluginSummary' => 'ApiPluginSummary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiPluginSummary) {
            $res['ApiPluginSummary'] = [];
            if (null !== $this->apiPluginSummary && \is_array($this->apiPluginSummary)) {
                $n = 0;
                foreach ($this->apiPluginSummary as $item) {
                    $res['ApiPluginSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiSummarys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiPluginSummary'])) {
            if (!empty($map['ApiPluginSummary'])) {
                $model->apiPluginSummary = [];
                $n                       = 0;
                foreach ($map['ApiPluginSummary'] as $item) {
                    $model->apiPluginSummary[$n++] = null !== $item ? apiPluginSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
