<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes;
use AlibabaCloud\Tea\Model;

class supportedEditionType extends Model
{
    /**
     * @description The edition of the instance. Valid values:
     *
     *   **Community**: Community Edition
     *   **Enterprise**: Enhanced Edition (Tair)
     *
     * @example Enterprise
     *
     * @var string
     */
    public $editionType;

    /**
     * @description The available instance series.
     *
     * @var supportedSeriesTypes
     */
    public $supportedSeriesTypes;
    protected $_name = [
        'editionType'          => 'EditionType',
        'supportedSeriesTypes' => 'SupportedSeriesTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editionType) {
            $res['EditionType'] = $this->editionType;
        }
        if (null !== $this->supportedSeriesTypes) {
            $res['SupportedSeriesTypes'] = null !== $this->supportedSeriesTypes ? $this->supportedSeriesTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEditionType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EditionType'])) {
            $model->editionType = $map['EditionType'];
        }
        if (isset($map['SupportedSeriesTypes'])) {
            $model->supportedSeriesTypes = supportedSeriesTypes::fromMap($map['SupportedSeriesTypes']);
        }

        return $model;
    }
}
