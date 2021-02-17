<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetImageCroppingSuggestionsRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $aspectRatios;
    protected $_name = [
        'project'      => 'Project',
        'imageUri'     => 'ImageUri',
        'aspectRatios' => 'AspectRatios',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->imageUri) {
            $res['ImageUri'] = $this->imageUri;
        }
        if (null !== $this->aspectRatios) {
            $res['AspectRatios'] = $this->aspectRatios;
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
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['AspectRatios'])) {
            $model->aspectRatios = $map['AspectRatios'];
        }

        return $model;
    }
}
