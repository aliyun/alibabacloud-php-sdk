<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories;

class supportedEngineVersion extends Model
{
    /**
     * @var supportedCategories
     */
    public $supportedCategories;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'supportedCategories' => 'SupportedCategories',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->supportedCategories) {
            $this->supportedCategories->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedCategories) {
            $res['SupportedCategories'] = null !== $this->supportedCategories ? $this->supportedCategories->toArray($noStream) : $this->supportedCategories;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['SupportedCategories'])) {
            $model->supportedCategories = supportedCategories::fromMap($map['SupportedCategories']);
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
