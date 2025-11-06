<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class CreateImageBuildResponseBody extends Model
{
    /**
     * @var string
     */
    public $imageBuildId;

    /**
     * @var string
     */
    public $imageBuildJobId;
    protected $_name = [
        'imageBuildId' => 'ImageBuildId',
        'imageBuildJobId' => 'ImageBuildJobId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageBuildId) {
            $res['ImageBuildId'] = $this->imageBuildId;
        }

        if (null !== $this->imageBuildJobId) {
            $res['ImageBuildJobId'] = $this->imageBuildJobId;
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
        if (isset($map['ImageBuildId'])) {
            $model->imageBuildId = $map['ImageBuildId'];
        }

        if (isset($map['ImageBuildJobId'])) {
            $model->imageBuildJobId = $map['ImageBuildJobId'];
        }

        return $model;
    }
}
