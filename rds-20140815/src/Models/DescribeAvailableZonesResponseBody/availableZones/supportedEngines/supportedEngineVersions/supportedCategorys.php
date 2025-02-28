<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines\supportedEngineVersions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines\supportedEngineVersions\supportedCategorys\supportedStorageTypes;

class supportedCategorys extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var supportedStorageTypes[]
     */
    public $supportedStorageTypes;
    protected $_name = [
        'category'              => 'Category',
        'supportedStorageTypes' => 'SupportedStorageTypes',
    ];

    public function validate()
    {
        if (\is_array($this->supportedStorageTypes)) {
            Model::validateArray($this->supportedStorageTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->supportedStorageTypes) {
            if (\is_array($this->supportedStorageTypes)) {
                $res['SupportedStorageTypes'] = [];
                $n1                           = 0;
                foreach ($this->supportedStorageTypes as $item1) {
                    $res['SupportedStorageTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['SupportedStorageTypes'])) {
            if (!empty($map['SupportedStorageTypes'])) {
                $model->supportedStorageTypes = [];
                $n1                           = 0;
                foreach ($map['SupportedStorageTypes'] as $item1) {
                    $model->supportedStorageTypes[$n1++] = supportedStorageTypes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
