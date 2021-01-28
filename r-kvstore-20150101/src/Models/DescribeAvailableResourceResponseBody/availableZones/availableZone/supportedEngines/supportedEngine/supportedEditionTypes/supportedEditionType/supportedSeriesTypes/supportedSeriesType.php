<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions;
use AlibabaCloud\Tea\Model;

class supportedSeriesType extends Model
{
    /**
     * @var supportedEngineVersions
     */
    public $supportedEngineVersions;

    /**
     * @var string
     */
    public $seriesType;
    protected $_name = [
        'supportedEngineVersions' => 'SupportedEngineVersions',
        'seriesType'              => 'SeriesType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedEngineVersions) {
            $res['SupportedEngineVersions'] = null !== $this->supportedEngineVersions ? $this->supportedEngineVersions->toMap() : null;
        }
        if (null !== $this->seriesType) {
            $res['SeriesType'] = $this->seriesType;
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
        if (isset($map['SupportedEngineVersions'])) {
            $model->supportedEngineVersions = supportedEngineVersions::fromMap($map['SupportedEngineVersions']);
        }
        if (isset($map['SeriesType'])) {
            $model->seriesType = $map['SeriesType'];
        }

        return $model;
    }
}
