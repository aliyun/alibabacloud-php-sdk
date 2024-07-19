<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class ListAnchorRequest extends Model
{
    /**
     * @example PUBLIC_MODEL
     *
     * @var string
     */
    public $anchorType;

    /**
     * @example 9:16
     *
     * @var string
     */
    public $coverRate;

    /**
     * @example staticTransparency
     *
     * @var string
     */
    public $digitalHumanType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example offlineSynthesis
     *
     * @var string
     */
    public $useScene;
    protected $_name = [
        'anchorType'       => 'anchorType',
        'coverRate'        => 'coverRate',
        'digitalHumanType' => 'digitalHumanType',
        'pageNumber'       => 'pageNumber',
        'pageSize'         => 'pageSize',
        'useScene'         => 'useScene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAnchorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }

        return $model;
    }
}
