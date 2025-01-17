<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail;

use AlibabaCloud\Dara\Model;

class titleCensorResult extends Model
{
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var string
     */
    public $scene;
    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label'      => 'Label',
        'rate'       => 'Rate',
        'scene'      => 'Scene',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
