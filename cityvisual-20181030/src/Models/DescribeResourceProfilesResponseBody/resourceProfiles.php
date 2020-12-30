<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeResourceProfilesResponseBody;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeResourceProfilesResponseBody\resourceProfiles\resourceProfile;
use AlibabaCloud\Tea\Model;

class resourceProfiles extends Model
{
    /**
     * @var resourceProfile[]
     */
    public $resourceProfile;
    protected $_name = [
        'resourceProfile' => 'ResourceProfile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceProfile) {
            $res['ResourceProfile'] = [];
            if (null !== $this->resourceProfile && \is_array($this->resourceProfile)) {
                $n = 0;
                foreach ($this->resourceProfile as $item) {
                    $res['ResourceProfile'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceProfiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceProfile'])) {
            if (!empty($map['ResourceProfile'])) {
                $model->resourceProfile = [];
                $n                      = 0;
                foreach ($map['ResourceProfile'] as $item) {
                    $model->resourceProfile[$n++] = null !== $item ? resourceProfile::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
