<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddWaterMarkTemplateResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\AddWaterMarkTemplateResponseBody\waterMarkTemplate\ratioRefer;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddWaterMarkTemplateResponseBody\waterMarkTemplate\timeline;
use AlibabaCloud\Tea\Model;

class waterMarkTemplate extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var ratioRefer
     */
    public $ratioRefer;

    /**
     * @var string
     */
    public $referPos;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $dx;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $height;

    /**
     * @var timeline
     */
    public $timeline;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $dy;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'type'       => 'Type',
        'ratioRefer' => 'RatioRefer',
        'referPos'   => 'ReferPos',
        'state'      => 'State',
        'dx'         => 'Dx',
        'width'      => 'Width',
        'height'     => 'Height',
        'timeline'   => 'Timeline',
        'name'       => 'Name',
        'dy'         => 'Dy',
        'id'         => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->ratioRefer) {
            $res['RatioRefer'] = null !== $this->ratioRefer ? $this->ratioRefer->toMap() : null;
        }
        if (null !== $this->referPos) {
            $res['ReferPos'] = $this->referPos;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->dx) {
            $res['Dx'] = $this->dx;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = null !== $this->timeline ? $this->timeline->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->dy) {
            $res['Dy'] = $this->dy;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return waterMarkTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['RatioRefer'])) {
            $model->ratioRefer = ratioRefer::fromMap($map['RatioRefer']);
        }
        if (isset($map['ReferPos'])) {
            $model->referPos = $map['ReferPos'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Dx'])) {
            $model->dx = $map['Dx'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = timeline::fromMap($map['Timeline']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Dy'])) {
            $model->dy = $map['Dy'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
