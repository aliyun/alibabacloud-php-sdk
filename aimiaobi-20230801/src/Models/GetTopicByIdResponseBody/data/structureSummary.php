<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicByIdResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicByIdResponseBody\data\structureSummary\docList;

class structureSummary extends Model
{
    /**
     * @var docList[]
     */
    public $docList;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'docList' => 'DocList',
        'summary' => 'Summary',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->docList)) {
            Model::validateArray($this->docList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docList) {
            if (\is_array($this->docList)) {
                $res['DocList'] = [];
                $n1 = 0;
                foreach ($this->docList as $item1) {
                    $res['DocList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['DocList'])) {
            if (!empty($map['DocList'])) {
                $model->docList = [];
                $n1 = 0;
                foreach ($map['DocList'] as $item1) {
                    $model->docList[$n1] = docList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
