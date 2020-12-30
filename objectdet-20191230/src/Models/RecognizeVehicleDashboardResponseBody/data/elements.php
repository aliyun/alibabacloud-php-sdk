<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehicleDashboardResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var float[]
     */
    public $boxes;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $className;
    protected $_name = [
        'boxes'     => 'Boxes',
        'score'     => 'Score',
        'label'     => 'Label',
        'className' => 'ClassName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }

        return $model;
    }
}
