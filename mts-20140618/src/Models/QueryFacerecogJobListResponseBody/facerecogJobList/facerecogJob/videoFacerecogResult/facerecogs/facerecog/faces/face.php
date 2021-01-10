<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList\facerecogJob\videoFacerecogResult\facerecogs\facerecog\faces;

use AlibabaCloud\Tea\Model;

class face extends Model
{
    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'score'  => 'Score',
        'name'   => 'Name',
        'target' => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return face
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
