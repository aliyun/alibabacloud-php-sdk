<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SearchWaterMarkTemplateResponseBody\waterMarkTemplateList;

use AlibabaCloud\SDK\Mts\V20140618\Models\SearchWaterMarkTemplateResponseBody\waterMarkTemplateList\waterMarkTemplate\ratioRefer;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchWaterMarkTemplateResponseBody\waterMarkTemplateList\waterMarkTemplate\timeline;
use AlibabaCloud\Tea\Model;

class waterMarkTemplate extends Model
{
    /**
     * @var string
     */
    public $dx;

    /**
     * @var string
     */
    public $dy;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

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
     * @var timeline
     */
    public $timeline;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'dx'         => 'Dx',
        'dy'         => 'Dy',
        'height'     => 'Height',
        'id'         => 'Id',
        'name'       => 'Name',
        'ratioRefer' => 'RatioRefer',
        'referPos'   => 'ReferPos',
        'state'      => 'State',
        'timeline'   => 'Timeline',
        'type'       => 'Type',
        'width'      => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dx) {
            $res['Dx'] = $this->dx;
        }
        if (null !== $this->dy) {
            $res['Dy'] = $this->dy;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->timeline) {
            $res['Timeline'] = null !== $this->timeline ? $this->timeline->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Dx'])) {
            $model->dx = $map['Dx'];
        }
        if (isset($map['Dy'])) {
            $model->dy = $map['Dy'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['Timeline'])) {
            $model->timeline = timeline::fromMap($map['Timeline']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
