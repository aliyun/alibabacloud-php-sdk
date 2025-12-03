<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion;

class supportedEngineVersions extends Model
{
    /**
     * @var supportedEngineVersion[]
     */
    public $supportedEngineVersion;
    protected $_name = [
        'supportedEngineVersion' => 'SupportedEngineVersion',
    ];

    public function validate()
    {
        if (\is_array($this->supportedEngineVersion)) {
            Model::validateArray($this->supportedEngineVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedEngineVersion) {
            if (\is_array($this->supportedEngineVersion)) {
                $res['SupportedEngineVersion'] = [];
                $n1 = 0;
                foreach ($this->supportedEngineVersion as $item1) {
                    $res['SupportedEngineVersion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportedEngineVersion'])) {
            if (!empty($map['SupportedEngineVersion'])) {
                $model->supportedEngineVersion = [];
                $n1 = 0;
                foreach ($map['SupportedEngineVersion'] as $item1) {
                    $model->supportedEngineVersion[$n1] = supportedEngineVersion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
