<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody\tamper\baseResults\psLoc;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var float[]
     */
    public $bbox;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'bbox' => 'Bbox',
        'score' => 'Score',
    ];

    public function validate()
    {
        if (\is_array($this->bbox)) {
            Model::validateArray($this->bbox);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bbox) {
            if (\is_array($this->bbox)) {
                $res['Bbox'] = [];
                $n1 = 0;
                foreach ($this->bbox as $item1) {
                    $res['Bbox'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['Bbox'])) {
            if (!empty($map['Bbox'])) {
                $model->bbox = [];
                $n1 = 0;
                foreach ($map['Bbox'] as $item1) {
                    $model->bbox[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
