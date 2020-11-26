<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse\data\faceInfos\faceAttributesDetectInfo\faceAttributes;

use AlibabaCloud\Tea\Model;

class gender extends Model
{
    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'score' => 'Score',
        'value' => 'Value',
    ];

    public function validate()
    {
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('value', $this->value, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gender
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
