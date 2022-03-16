<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories;
use AlibabaCloud\Tea\Model;

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
        'version'             => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedCategories) {
            $res['SupportedCategories'] = null !== $this->supportedCategories ? $this->supportedCategories->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['SupportedCategories'])) {
            $model->supportedCategories = supportedCategories::fromMap($map['SupportedCategories']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
