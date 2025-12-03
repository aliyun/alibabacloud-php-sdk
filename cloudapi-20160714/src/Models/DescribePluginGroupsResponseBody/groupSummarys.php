<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginGroupsResponseBody\groupSummarys\groupPluginSummary;

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
        if (\is_array($this->groupPluginSummary)) {
            Model::validateArray($this->groupPluginSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupPluginSummary) {
            if (\is_array($this->groupPluginSummary)) {
                $res['GroupPluginSummary'] = [];
                $n1 = 0;
                foreach ($this->groupPluginSummary as $item1) {
                    $res['GroupPluginSummary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['GroupPluginSummary'])) {
            if (!empty($map['GroupPluginSummary'])) {
                $model->groupPluginSummary = [];
                $n1 = 0;
                foreach ($map['GroupPluginSummary'] as $item1) {
                    $model->groupPluginSummary[$n1] = groupPluginSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
