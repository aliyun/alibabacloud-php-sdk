<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data;

use AlibabaCloud\Tea\Model;

class boxes extends Model
{
    /**
     * @var float
     */
    public $score;

    /**
     * @var float
     */
    public $topLeftX;

    /**
     * @var float
     */
    public $topLeftY;

    /**
     * @var float
     */
    public $bottomRightX;

    /**
     * @var float
     */
    public $bottomRightY;
    protected $_name = [
        'score'        => 'Score',
        'topLeftX'     => 'TopLeftX',
        'topLeftY'     => 'TopLeftY',
        'bottomRightX' => 'BottomRightX',
        'bottomRightY' => 'BottomRightY',
    ];

    public function validate()
    {
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('topLeftX', $this->topLeftX, true);
        Model::validateRequired('topLeftY', $this->topLeftY, true);
        Model::validateRequired('bottomRightX', $this->bottomRightX, true);
        Model::validateRequired('bottomRightY', $this->bottomRightY, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->topLeftX) {
            $res['TopLeftX'] = $this->topLeftX;
        }
        if (null !== $this->topLeftY) {
            $res['TopLeftY'] = $this->topLeftY;
        }
        if (null !== $this->bottomRightX) {
            $res['BottomRightX'] = $this->bottomRightX;
        }
        if (null !== $this->bottomRightY) {
            $res['BottomRightY'] = $this->bottomRightY;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return boxes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['TopLeftX'])) {
            $model->topLeftX = $map['TopLeftX'];
        }
        if (isset($map['TopLeftY'])) {
            $model->topLeftY = $map['TopLeftY'];
        }
        if (isset($map['BottomRightX'])) {
            $model->bottomRightX = $map['BottomRightX'];
        }
        if (isset($map['BottomRightY'])) {
            $model->bottomRightY = $map['BottomRightY'];
        }

        return $model;
    }
}
