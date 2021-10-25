<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models;

use AlibabaCloud\Tea\Model;

class ImageCategoryRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $picUrl;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'picUrl'       => 'PicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }

        return $model;
    }
}
