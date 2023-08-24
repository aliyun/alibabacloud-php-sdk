<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions;
use AlibabaCloud\Tea\Model;

class supportedSeriesType extends Model
{
    /**
     * @description The instance series. Valid values:
     *
     *   **enhanced_performance_type**: ApsaraDB for Redis Enhanced Edition (Tair) DRAM-based instance
     *   **hybrid_storage**: ApsaraDB for Redis Community Edition hybrid-storage instance
     *
     * @example enhanced_performance_type
     *
     * @var string
     */
    public $seriesType;

    /**
     * @description The available engine versions.
     *
     * @var supportedEngineVersions
     */
    public $supportedEngineVersions;
    protected $_name = [
        'seriesType'              => 'SeriesType',
        'supportedEngineVersions' => 'SupportedEngineVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->seriesType) {
            $res['SeriesType'] = $this->seriesType;
        }
        if (null !== $this->supportedEngineVersions) {
            $res['SupportedEngineVersions'] = null !== $this->supportedEngineVersions ? $this->supportedEngineVersions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedSeriesType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SeriesType'])) {
            $model->seriesType = $map['SeriesType'];
        }
        if (isset($map['SupportedEngineVersions'])) {
            $model->supportedEngineVersions = supportedEngineVersions::fromMap($map['SupportedEngineVersions']);
        }

        return $model;
    }
}
