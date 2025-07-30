<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion;
use AlibabaCloud\Tea\Model;

class supportedEngineVersions extends Model
{
    /**
     * @var supportedEngineVersion[]
     */
    public $supportedEngineVersion;
    protected $_name = [
        'supportedEngineVersion' => 'SupportedEngineVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedEngineVersion) {
            $res['SupportedEngineVersion'] = [];
            if (null !== $this->supportedEngineVersion && \is_array($this->supportedEngineVersion)) {
                $n = 0;
                foreach ($this->supportedEngineVersion as $item) {
                    $res['SupportedEngineVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngineVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedEngineVersion'])) {
            if (!empty($map['SupportedEngineVersion'])) {
                $model->supportedEngineVersion = [];
                $n = 0;
                foreach ($map['SupportedEngineVersion'] as $item) {
                    $model->supportedEngineVersion[$n++] = null !== $item ? supportedEngineVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
