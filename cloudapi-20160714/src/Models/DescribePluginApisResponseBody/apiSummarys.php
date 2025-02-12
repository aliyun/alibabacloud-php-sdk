<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginApisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginApisResponseBody\apiSummarys\apiPluginSummary;

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
        if (\is_array($this->apiPluginSummary)) {
            Model::validateArray($this->apiPluginSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiPluginSummary) {
            if (\is_array($this->apiPluginSummary)) {
                $res['ApiPluginSummary'] = [];
                $n1                      = 0;
                foreach ($this->apiPluginSummary as $item1) {
                    $res['ApiPluginSummary'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiPluginSummary'])) {
            if (!empty($map['ApiPluginSummary'])) {
                $model->apiPluginSummary = [];
                $n1                      = 0;
                foreach ($map['ApiPluginSummary'] as $item1) {
                    $model->apiPluginSummary[$n1++] = apiPluginSummary::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
