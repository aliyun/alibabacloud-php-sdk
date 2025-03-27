<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class ListAnchorRequest extends Model
{
    /**
     * @var string
     */
    public $anchorCategory;

    /**
     * @var string
     */
    public $anchorType;

    /**
     * @var string
     */
    public $coverRate;

    /**
     * @var string
     */
    public $digitalHumanType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resSpecType;

    /**
     * @var string
     */
    public $useScene;
    protected $_name = [
        'anchorCategory' => 'anchorCategory',
        'anchorType' => 'anchorType',
        'coverRate' => 'coverRate',
        'digitalHumanType' => 'digitalHumanType',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'resSpecType' => 'resSpecType',
        'useScene' => 'useScene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchorCategory) {
            $res['anchorCategory'] = $this->anchorCategory;
        }

        if (null !== $this->anchorType) {
            $res['anchorType'] = $this->anchorType;
        }

        if (null !== $this->coverRate) {
            $res['coverRate'] = $this->coverRate;
        }

        if (null !== $this->digitalHumanType) {
            $res['digitalHumanType'] = $this->digitalHumanType;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->resSpecType) {
            $res['resSpecType'] = $this->resSpecType;
        }

        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
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
        if (isset($map['anchorCategory'])) {
            $model->anchorCategory = $map['anchorCategory'];
        }

        if (isset($map['anchorType'])) {
            $model->anchorType = $map['anchorType'];
        }

        if (isset($map['coverRate'])) {
            $model->coverRate = $map['coverRate'];
        }

        if (isset($map['digitalHumanType'])) {
            $model->digitalHumanType = $map['digitalHumanType'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['resSpecType'])) {
            $model->resSpecType = $map['resSpecType'];
        }

        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }

        return $model;
    }
}
