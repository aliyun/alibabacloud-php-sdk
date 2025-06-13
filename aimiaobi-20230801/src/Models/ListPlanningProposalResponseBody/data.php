<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListPlanningProposalResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListPlanningProposalResponseBody\data\outlines;

class data extends Model
{
    /**
     * @var outlines[]
     */
    public $outlines;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'outlines' => 'Outlines',
        'summary' => 'Summary',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->outlines)) {
            Model::validateArray($this->outlines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outlines) {
            if (\is_array($this->outlines)) {
                $res['Outlines'] = [];
                $n1 = 0;
                foreach ($this->outlines as $item1) {
                    $res['Outlines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Outlines'])) {
            if (!empty($map['Outlines'])) {
                $model->outlines = [];
                $n1 = 0;
                foreach ($map['Outlines'] as $item1) {
                    $model->outlines[$n1] = outlines::fromMap($item1);
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
