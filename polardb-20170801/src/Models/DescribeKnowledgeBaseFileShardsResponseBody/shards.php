<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKnowledgeBaseFileShardsResponseBody;

use AlibabaCloud\Dara\Model;

class shards extends Model
{
    /**
     * @var string[]
     */
    public $headings;

    /**
     * @var string[]
     */
    public $pageNumbers;

    /**
     * @var string
     */
    public $shardContent;

    /**
     * @var int
     */
    public $shardIndex;
    protected $_name = [
        'headings' => 'Headings',
        'pageNumbers' => 'PageNumbers',
        'shardContent' => 'ShardContent',
        'shardIndex' => 'ShardIndex',
    ];

    public function validate()
    {
        if (\is_array($this->headings)) {
            Model::validateArray($this->headings);
        }
        if (\is_array($this->pageNumbers)) {
            Model::validateArray($this->pageNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headings) {
            if (\is_array($this->headings)) {
                $res['Headings'] = [];
                $n1 = 0;
                foreach ($this->headings as $item1) {
                    $res['Headings'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumbers) {
            if (\is_array($this->pageNumbers)) {
                $res['PageNumbers'] = [];
                $n1 = 0;
                foreach ($this->pageNumbers as $item1) {
                    $res['PageNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shardContent) {
            $res['ShardContent'] = $this->shardContent;
        }

        if (null !== $this->shardIndex) {
            $res['ShardIndex'] = $this->shardIndex;
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
        if (isset($map['Headings'])) {
            if (!empty($map['Headings'])) {
                $model->headings = [];
                $n1 = 0;
                foreach ($map['Headings'] as $item1) {
                    $model->headings[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumbers'])) {
            if (!empty($map['PageNumbers'])) {
                $model->pageNumbers = [];
                $n1 = 0;
                foreach ($map['PageNumbers'] as $item1) {
                    $model->pageNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ShardContent'])) {
            $model->shardContent = $map['ShardContent'];
        }

        if (isset($map['ShardIndex'])) {
            $model->shardIndex = $map['ShardIndex'];
        }

        return $model;
    }
}
