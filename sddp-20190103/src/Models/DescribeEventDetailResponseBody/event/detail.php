<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\chart;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\content;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\resourceInfo;

class detail extends Model
{
    /**
     * @var chart[]
     */
    public $chart;

    /**
     * @var content[]
     */
    public $content;

    /**
     * @var resourceInfo[]
     */
    public $resourceInfo;
    protected $_name = [
        'chart' => 'Chart',
        'content' => 'Content',
        'resourceInfo' => 'ResourceInfo',
    ];

    public function validate()
    {
        if (\is_array($this->chart)) {
            Model::validateArray($this->chart);
        }
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (\is_array($this->resourceInfo)) {
            Model::validateArray($this->resourceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chart) {
            if (\is_array($this->chart)) {
                $res['Chart'] = [];
                $n1 = 0;
                foreach ($this->chart as $item1) {
                    $res['Chart'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['Content'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceInfo) {
            if (\is_array($this->resourceInfo)) {
                $res['ResourceInfo'] = [];
                $n1 = 0;
                foreach ($this->resourceInfo as $item1) {
                    $res['ResourceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Chart'])) {
            if (!empty($map['Chart'])) {
                $model->chart = [];
                $n1 = 0;
                foreach ($map['Chart'] as $item1) {
                    $model->chart[$n1] = chart::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['Content'] as $item1) {
                    $model->content[$n1] = content::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceInfo'])) {
            if (!empty($map['ResourceInfo'])) {
                $model->resourceInfo = [];
                $n1 = 0;
                foreach ($map['ResourceInfo'] as $item1) {
                    $model->resourceInfo[$n1] = resourceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
