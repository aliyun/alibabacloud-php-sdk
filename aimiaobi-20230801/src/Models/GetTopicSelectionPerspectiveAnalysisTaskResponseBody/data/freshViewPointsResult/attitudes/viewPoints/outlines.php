<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponseBody\data\freshViewPointsResult\attitudes\viewPoints;

use AlibabaCloud\Tea\Model;

class outlines extends Model
{
    /**
     * @example 大纲
     *
     * @var string
     */
    public $outline;

    /**
     * @example 大纲摘要
     *
     * @var string
     */
    public $summary;
    protected $_name = [
        'outline' => 'Outline',
        'summary' => 'Summary',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return outlines
     */
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
