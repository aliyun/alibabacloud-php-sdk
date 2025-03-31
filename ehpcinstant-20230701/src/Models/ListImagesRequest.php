<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class ListImagesRequest extends Model
{
    /**
     * @var string
     */
    public $imageCategory;

    /**
     * @var string[]
     */
    public $imageIds;

    /**
     * @var string[]
     */
    public $imageNames;

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
        'imageCategory' => 'ImageCategory',
        'imageIds' => 'ImageIds',
        'imageNames' => 'ImageNames',
        'imageType' => 'ImageType',
        'mode' => 'Mode',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->imageIds)) {
            Model::validateArray($this->imageIds);
        }
        if (\is_array($this->imageNames)) {
            Model::validateArray($this->imageNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }

        if (null !== $this->imageIds) {
            if (\is_array($this->imageIds)) {
                $res['ImageIds'] = [];
                $n1 = 0;
                foreach ($this->imageIds as $item1) {
                    $res['ImageIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->imageNames) {
            if (\is_array($this->imageNames)) {
                $res['ImageNames'] = [];
                $n1 = 0;
                foreach ($this->imageNames as $item1) {
                    $res['ImageNames'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['ImageIds'])) {
                $model->imageIds = [];
                $n1 = 0;
                foreach ($map['ImageIds'] as $item1) {
                    $model->imageIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ImageNames'])) {
            if (!empty($map['ImageNames'])) {
                $model->imageNames = [];
                $n1 = 0;
                foreach ($map['ImageNames'] as $item1) {
                    $model->imageNames[$n1++] = $item1;
                }
            }
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
