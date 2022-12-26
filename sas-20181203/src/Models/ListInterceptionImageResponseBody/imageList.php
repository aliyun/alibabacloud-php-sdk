<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionImageResponseBody;

use AlibabaCloud\Tea\Model;

class imageList extends Model
{
    /**
     * @example opa-test:nu****
     *
     * @var string
     */
    public $imageName;

    /**
     * @example 1db2a71aa0f7afad1c2f59e4840c****
     *
     * @var string
     */
    public $imageUuid;
    protected $_name = [
        'imageName' => 'ImageName',
        'imageUuid' => 'ImageUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }

        return $model;
    }
}
