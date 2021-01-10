<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\vensorCensorResult\videoTimelines\videoTimeline\censorResults;

use AlibabaCloud\Tea\Model;

class censorResult extends Model
{
    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $rate;
    protected $_name = [
        'suggestion' => 'Suggestion',
        'label'      => 'Label',
        'scene'      => 'Scene',
        'rate'       => 'Rate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return censorResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        return $model;
    }
}
