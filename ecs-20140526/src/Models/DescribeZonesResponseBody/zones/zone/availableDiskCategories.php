<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Dara\Model;

class availableDiskCategories extends Model
{
    /**
     * @var string[]
     */
    public $diskCategories;
    protected $_name = [
        'diskCategories' => 'DiskCategories',
    ];

    public function validate()
    {
        if (\is_array($this->diskCategories)) {
            Model::validateArray($this->diskCategories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskCategories) {
            if (\is_array($this->diskCategories)) {
                $res['DiskCategories'] = [];
                $n1 = 0;
                foreach ($this->diskCategories as $item1) {
                    $res['DiskCategories'][$n1++] = $item1;
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
        if (isset($map['DiskCategories'])) {
            if (!empty($map['DiskCategories'])) {
                $model->diskCategories = [];
                $n1 = 0;
                foreach ($map['DiskCategories'] as $item1) {
                    $model->diskCategories[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
