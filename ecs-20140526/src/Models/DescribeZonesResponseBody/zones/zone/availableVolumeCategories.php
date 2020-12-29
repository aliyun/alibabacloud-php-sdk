<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Tea\Model;

class availableVolumeCategories extends Model
{
    /**
     * @var string[]
     */
    public $volumeCategories;
    protected $_name = [
        'volumeCategories' => 'VolumeCategories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->volumeCategories) {
            $res['VolumeCategories'] = $this->volumeCategories;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableVolumeCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VolumeCategories'])) {
            if (!empty($map['VolumeCategories'])) {
                $model->volumeCategories = $map['VolumeCategories'];
            }
        }

        return $model;
    }
}
