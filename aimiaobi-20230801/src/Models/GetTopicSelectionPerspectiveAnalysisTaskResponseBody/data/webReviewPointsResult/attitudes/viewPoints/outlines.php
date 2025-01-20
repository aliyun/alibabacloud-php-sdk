<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\webReviewPointsResult\attitudes\viewPoints;

use AlibabaCloud\Dara\Model;

class outlines extends Model
{
    /**
     * @var string
     */
    public $outline;
    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'outline' => 'Outline',
        'summary' => 'Summary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outline) {
            $res['Outline'] = $this->outline;
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
        if (isset($map['Outline'])) {
            $model->outline = $map['Outline'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
