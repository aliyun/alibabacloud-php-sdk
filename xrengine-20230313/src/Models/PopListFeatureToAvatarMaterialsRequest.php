<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class PopListFeatureToAvatarMaterialsRequest extends Model
{
    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $listStatus;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'current'    => 'Current',
        'listStatus' => 'ListStatus',
        'size'       => 'Size',
        'tags'       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->listStatus) {
            $res['ListStatus'] = $this->listStatus;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PopListFeatureToAvatarMaterialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['ListStatus'])) {
            $model->listStatus = $map['ListStatus'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
