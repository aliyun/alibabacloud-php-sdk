<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories;
use AlibabaCloud\Tea\Model;

class supportedCategories extends Model
{
    /**
     * @var supportedCategories[]
     */
    public $supportedCategories;
    protected $_name = [
        'supportedCategories' => 'SupportedCategories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedCategories) {
            $res['SupportedCategories'] = [];
            if (null !== $this->supportedCategories && \is_array($this->supportedCategories)) {
                $n = 0;
                foreach ($this->supportedCategories as $item) {
                    $res['SupportedCategories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedCategories'])) {
            if (!empty($map['SupportedCategories'])) {
                $model->supportedCategories = [];
                $n                          = 0;
                foreach ($map['SupportedCategories'] as $item) {
                    $model->supportedCategories[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
