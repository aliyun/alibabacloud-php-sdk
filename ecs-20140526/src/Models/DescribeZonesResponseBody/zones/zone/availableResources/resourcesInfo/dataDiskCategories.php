<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Dara\Model;

class dataDiskCategories extends Model
{
    /**
     * @var string[]
     */
    public $supportedDataDiskCategory;
    protected $_name = [
        'supportedDataDiskCategory' => 'supportedDataDiskCategory',
    ];

    public function validate()
    {
        if (\is_array($this->supportedDataDiskCategory)) {
            Model::validateArray($this->supportedDataDiskCategory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedDataDiskCategory) {
            if (\is_array($this->supportedDataDiskCategory)) {
                $res['supportedDataDiskCategory'] = [];
                $n1 = 0;
                foreach ($this->supportedDataDiskCategory as $item1) {
                    $res['supportedDataDiskCategory'][$n1++] = $item1;
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
        if (isset($map['supportedDataDiskCategory'])) {
            if (!empty($map['supportedDataDiskCategory'])) {
                $model->supportedDataDiskCategory = [];
                $n1 = 0;
                foreach ($map['supportedDataDiskCategory'] as $item1) {
                    $model->supportedDataDiskCategory[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
