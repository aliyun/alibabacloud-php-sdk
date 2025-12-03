<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources\coreResource;

class coreResources extends Model
{
    /**
     * @var coreResource[]
     */
    public $coreResource;
    protected $_name = [
        'coreResource' => 'CoreResource',
    ];

    public function validate()
    {
        if (\is_array($this->coreResource)) {
            Model::validateArray($this->coreResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coreResource) {
            if (\is_array($this->coreResource)) {
                $res['CoreResource'] = [];
                $n1 = 0;
                foreach ($this->coreResource as $item1) {
                    $res['CoreResource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CoreResource'])) {
            if (!empty($map['CoreResource'])) {
                $model->coreResource = [];
                $n1 = 0;
                foreach ($map['CoreResource'] as $item1) {
                    $model->coreResource[$n1] = coreResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
