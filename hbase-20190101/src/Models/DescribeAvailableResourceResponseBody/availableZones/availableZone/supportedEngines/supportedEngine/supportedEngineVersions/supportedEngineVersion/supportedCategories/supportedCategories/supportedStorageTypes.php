<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType;

class supportedStorageTypes extends Model
{
    /**
     * @var supportedStorageType[]
     */
    public $supportedStorageType;
    protected $_name = [
        'supportedStorageType' => 'SupportedStorageType',
    ];

    public function validate()
    {
        if (\is_array($this->supportedStorageType)) {
            Model::validateArray($this->supportedStorageType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedStorageType) {
            if (\is_array($this->supportedStorageType)) {
                $res['SupportedStorageType'] = [];
                $n1 = 0;
                foreach ($this->supportedStorageType as $item1) {
                    $res['SupportedStorageType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['SupportedStorageType'])) {
            if (!empty($map['SupportedStorageType'])) {
                $model->supportedStorageType = [];
                $n1 = 0;
                foreach ($map['SupportedStorageType'] as $item1) {
                    $model->supportedStorageType[$n1] = supportedStorageType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
