<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions;

class supportedSeriesType extends Model
{
    /**
     * @var string
     */
    public $seriesType;

    /**
     * @var supportedEngineVersions
     */
    public $supportedEngineVersions;
    protected $_name = [
        'seriesType' => 'SeriesType',
        'supportedEngineVersions' => 'SupportedEngineVersions',
    ];

    public function validate()
    {
        if (null !== $this->supportedEngineVersions) {
            $this->supportedEngineVersions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->seriesType) {
            $res['SeriesType'] = $this->seriesType;
        }

        if (null !== $this->supportedEngineVersions) {
            $res['SupportedEngineVersions'] = null !== $this->supportedEngineVersions ? $this->supportedEngineVersions->toArray($noStream) : $this->supportedEngineVersions;
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
        if (isset($map['SeriesType'])) {
            $model->seriesType = $map['SeriesType'];
        }

        if (isset($map['SupportedEngineVersions'])) {
            $model->supportedEngineVersions = supportedEngineVersions::fromMap($map['SupportedEngineVersions']);
        }

        return $model;
    }
}
