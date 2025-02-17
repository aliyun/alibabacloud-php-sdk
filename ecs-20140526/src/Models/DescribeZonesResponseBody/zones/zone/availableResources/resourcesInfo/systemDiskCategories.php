<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Dara\Model;

class systemDiskCategories extends Model
{
    /**
     * @var string[]
     */
    public $supportedSystemDiskCategory;
    protected $_name = [
        'supportedSystemDiskCategory' => 'supportedSystemDiskCategory',
    ];

    public function validate()
    {
        if (\is_array($this->supportedSystemDiskCategory)) {
            Model::validateArray($this->supportedSystemDiskCategory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedSystemDiskCategory) {
            if (\is_array($this->supportedSystemDiskCategory)) {
                $res['supportedSystemDiskCategory'] = [];
                $n1                                 = 0;
                foreach ($this->supportedSystemDiskCategory as $item1) {
                    $res['supportedSystemDiskCategory'][$n1++] = $item1;
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
        if (isset($map['supportedSystemDiskCategory'])) {
            if (!empty($map['supportedSystemDiskCategory'])) {
                $model->supportedSystemDiskCategory = [];
                $n1                                 = 0;
                foreach ($map['supportedSystemDiskCategory'] as $item1) {
                    $model->supportedSystemDiskCategory[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
