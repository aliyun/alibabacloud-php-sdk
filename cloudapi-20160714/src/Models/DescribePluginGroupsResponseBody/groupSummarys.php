<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginGroupsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginGroupsResponseBody\groupSummarys\groupPluginSummary;
use AlibabaCloud\Tea\Model;

class groupSummarys extends Model
{
    /**
     * @var groupPluginSummary[]
     */
    public $groupPluginSummary;
    protected $_name = [
        'groupPluginSummary' => 'GroupPluginSummary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupPluginSummary) {
            $res['GroupPluginSummary'] = [];
            if (null !== $this->groupPluginSummary && \is_array($this->groupPluginSummary)) {
                $n = 0;
                foreach ($this->groupPluginSummary as $item) {
                    $res['GroupPluginSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupSummarys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupPluginSummary'])) {
            if (!empty($map['GroupPluginSummary'])) {
                $model->groupPluginSummary = [];
                $n                         = 0;
                foreach ($map['GroupPluginSummary'] as $item) {
                    $model->groupPluginSummary[$n++] = null !== $item ? groupPluginSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
