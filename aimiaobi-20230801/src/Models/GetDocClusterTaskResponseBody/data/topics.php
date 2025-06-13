<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDocClusterTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class topics extends Model
{
    /**
     * @var string[]
     */
    public $docIds;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'docIds' => 'DocIds',
        'summary' => 'Summary',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->docIds)) {
            Model::validateArray($this->docIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docIds) {
            if (\is_array($this->docIds)) {
                $res['DocIds'] = [];
                $n1 = 0;
                foreach ($this->docIds as $item1) {
                    $res['DocIds'][$n1] = $item1;
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
        if (isset($map['DocIds'])) {
            if (!empty($map['DocIds'])) {
                $model->docIds = [];
                $n1 = 0;
                foreach ($map['DocIds'] as $item1) {
                    $model->docIds[$n1] = $item1;
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
