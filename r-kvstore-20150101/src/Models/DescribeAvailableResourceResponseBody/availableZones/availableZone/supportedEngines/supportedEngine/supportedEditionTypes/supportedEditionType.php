<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes;

class supportedEditionType extends Model
{
    /**
     * @var string
     */
    public $editionType;

    /**
     * @var supportedSeriesTypes
     */
    public $supportedSeriesTypes;
    protected $_name = [
        'editionType' => 'EditionType',
        'supportedSeriesTypes' => 'SupportedSeriesTypes',
    ];

    public function validate()
    {
        if (null !== $this->supportedSeriesTypes) {
            $this->supportedSeriesTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editionType) {
            $res['EditionType'] = $this->editionType;
        }

        if (null !== $this->supportedSeriesTypes) {
            $res['SupportedSeriesTypes'] = null !== $this->supportedSeriesTypes ? $this->supportedSeriesTypes->toArray($noStream) : $this->supportedSeriesTypes;
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
        if (isset($map['EditionType'])) {
            $model->editionType = $map['EditionType'];
        }

        if (isset($map['SupportedSeriesTypes'])) {
            $model->supportedSeriesTypes = supportedSeriesTypes::fromMap($map['SupportedSeriesTypes']);
        }

        return $model;
    }
}
