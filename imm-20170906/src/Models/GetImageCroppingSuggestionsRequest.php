<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetImageCroppingSuggestionsRequest extends Model
{
    /**
     * @var string
     */
    public $aspectRatios;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'aspectRatios' => 'AspectRatios',
        'imageUri'     => 'ImageUri',
        'project'      => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aspectRatios) {
            $res['AspectRatios'] = $this->aspectRatios;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageCroppingSuggestionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AspectRatios'])) {
            $model->aspectRatios = $map['AspectRatios'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
