<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class DetectImageBodiesRequest extends Model
{
    /**
     * @var string
     */
    public $imageUri;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'imageUri' => 'ImageUri',
        'project'  => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DetectImageBodiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUri'])) {
            $model->imageUri = $map['ImageUri'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
