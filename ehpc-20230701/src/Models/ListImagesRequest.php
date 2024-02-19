<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models;

use AlibabaCloud\Tea\Model;

class ListImagesRequest extends Model
{
    /**
     * @var string[]
     */
    public $imageIds;

    /**
     * @var string[]
     */
    public $imageNames;

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
    protected $_name = [
        'imageIds'   => 'ImageIds',
        'imageNames' => 'ImageNames',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageIds) {
            $res['ImageIds'] = $this->imageIds;
        }
        if (null !== $this->imageNames) {
            $res['ImageNames'] = $this->imageNames;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageIds'])) {
            if (!empty($map['ImageIds'])) {
                $model->imageIds = $map['ImageIds'];
            }
        }
        if (isset($map['ImageNames'])) {
            if (!empty($map['ImageNames'])) {
                $model->imageNames = $map['ImageNames'];
            }
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
