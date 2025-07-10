<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponseBody\apiSummarys\apiSummary;

class apiSummarys extends Model
{
    /**
     * @var apiSummary[]
     */
    public $apiSummary;
    protected $_name = [
        'apiSummary' => 'ApiSummary',
    ];

    public function validate()
    {
        if (\is_array($this->apiSummary)) {
            Model::validateArray($this->apiSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiSummary) {
            if (\is_array($this->apiSummary)) {
                $res['ApiSummary'] = [];
                $n1 = 0;
                foreach ($this->apiSummary as $item1) {
                    $res['ApiSummary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiSummary'])) {
            if (!empty($map['ApiSummary'])) {
                $model->apiSummary = [];
                $n1 = 0;
                foreach ($map['ApiSummary'] as $item1) {
                    $model->apiSummary[$n1] = apiSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
