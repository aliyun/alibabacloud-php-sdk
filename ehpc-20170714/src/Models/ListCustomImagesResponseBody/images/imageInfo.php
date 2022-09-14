<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models\ListCustomImagesResponseBody\images;

use AlibabaCloud\SDK\EHPC\V20170714\Models\ListCustomImagesResponseBody\images\imageInfo\baseOsTag;
use AlibabaCloud\Tea\Model;

class imageInfo extends Model
{
    /**
     * @var baseOsTag
     */
    public $baseOsTag;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imageOwnerAlias;
    protected $_name = [
        'baseOsTag'       => 'BaseOsTag',
        'description'     => 'Description',
        'imageId'         => 'ImageId',
        'imageName'       => 'ImageName',
        'imageOwnerAlias' => 'ImageOwnerAlias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = null !== $this->baseOsTag ? $this->baseOsTag->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = baseOsTag::fromMap($map['BaseOsTag']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }

        return $model;
    }
}
