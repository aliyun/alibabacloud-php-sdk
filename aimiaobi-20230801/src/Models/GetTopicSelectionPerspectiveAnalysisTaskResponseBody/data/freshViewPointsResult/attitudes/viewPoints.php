<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\freshViewPointsResult\attitudes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\freshViewPointsResult\attitudes\viewPoints\outlines;

class viewPoints extends Model
{
    /**
     * @var outlines[]
     */
    public $outlines;
    /**
     * @var string
     */
    public $point;
    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'outlines' => 'Outlines',
        'point'    => 'Point',
        'summary'  => 'Summary',
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
                $n1              = 0;
                foreach ($this->outlines as $item1) {
                    $res['Outlines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->point) {
            $res['Point'] = $this->point;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
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
                $n1              = 0;
                foreach ($map['Outlines'] as $item1) {
                    $model->outlines[$n1++] = outlines::fromMap($item1);
                }
            }
        }

        if (isset($map['Point'])) {
            $model->point = $map['Point'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
