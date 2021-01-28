<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes;
use AlibabaCloud\Tea\Model;

class supportedEditionType extends Model
{
    /**
     * @var supportedSeriesTypes
     */
    public $supportedSeriesTypes;

    /**
     * @var string
     */
    public $editionType;
    protected $_name = [
        'supportedSeriesTypes' => 'SupportedSeriesTypes',
        'editionType'          => 'EditionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedSeriesTypes) {
            $res['SupportedSeriesTypes'] = null !== $this->supportedSeriesTypes ? $this->supportedSeriesTypes->toMap() : null;
        }
        if (null !== $this->editionType) {
            $res['EditionType'] = $this->editionType;
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
        if (isset($map['SupportedSeriesTypes'])) {
            $model->supportedSeriesTypes = supportedSeriesTypes::fromMap($map['SupportedSeriesTypes']);
        }
        if (isset($map['EditionType'])) {
            $model->editionType = $map['EditionType'];
        }

        return $model;
    }
}
