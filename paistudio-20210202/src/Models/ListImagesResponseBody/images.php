<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListImagesResponseBody;

use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListImagesResponseBody\images\labels;
use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 2021-01-21T17:12:35.232Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example image-tzi7f9czc0cxs9s45t
     *
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description'   => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'imageId'       => 'ImageId',
        'imageUri'      => 'ImageUri',
        'labels'        => 'Labels',
        'name'          => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
