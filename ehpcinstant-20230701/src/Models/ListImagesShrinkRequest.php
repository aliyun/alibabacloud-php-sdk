<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class ListImagesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageCategory;
    /**
     * @var string
     */
    public $imageIdsShrink;
    /**
     * @var string
     */
    public $imageNamesShrink;
    /**
     * @var string
     */
    public $imageType;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'imageCategory'    => 'ImageCategory',
        'imageIdsShrink'   => 'ImageIds',
        'imageNamesShrink' => 'ImageNames',
        'imageType'        => 'ImageType',
        'mode'             => 'Mode',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }

        if (null !== $this->imageIdsShrink) {
            $res['ImageIds'] = $this->imageIdsShrink;
        }

        if (null !== $this->imageNamesShrink) {
            $res['ImageNames'] = $this->imageNamesShrink;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }

        if (isset($map['ImageIds'])) {
            $model->imageIdsShrink = $map['ImageIds'];
        }

        if (isset($map['ImageNames'])) {
            $model->imageNamesShrink = $map['ImageNames'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
