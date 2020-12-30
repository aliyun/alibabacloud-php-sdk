<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories;
use AlibabaCloud\Tea\Model;

class supportedEngineVersion extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var supportedCategories
     */
    public $supportedCategories;
    protected $_name = [
        'version'             => 'Version',
        'supportedCategories' => 'SupportedCategories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->supportedCategories) {
            $res['SupportedCategories'] = null !== $this->supportedCategories ? $this->supportedCategories->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngineVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['SupportedCategories'])) {
            $model->supportedCategories = supportedCategories::fromMap($map['SupportedCategories']);
        }

        return $model;
    }
}
