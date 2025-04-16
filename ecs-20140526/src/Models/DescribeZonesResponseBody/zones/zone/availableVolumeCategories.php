<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->volumeCategories)) {
            Model::validateArray($this->volumeCategories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->volumeCategories) {
            if (\is_array($this->volumeCategories)) {
                $res['VolumeCategories'] = [];
                $n1 = 0;
                foreach ($this->volumeCategories as $item1) {
                    $res['VolumeCategories'][$n1++] = $item1;
                }
            }
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
        if (isset($map['VolumeCategories'])) {
            if (!empty($map['VolumeCategories'])) {
                $model->volumeCategories = [];
                $n1 = 0;
                foreach ($map['VolumeCategories'] as $item1) {
                    $model->volumeCategories[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
