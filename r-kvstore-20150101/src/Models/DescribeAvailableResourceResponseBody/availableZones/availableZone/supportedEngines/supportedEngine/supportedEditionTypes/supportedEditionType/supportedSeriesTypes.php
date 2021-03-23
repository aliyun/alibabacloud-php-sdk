<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType;
use AlibabaCloud\Tea\Model;

class supportedSeriesTypes extends Model
{
    /**
     * @var supportedSeriesType[]
     */
    public $supportedSeriesType;
    protected $_name = [
        'supportedSeriesType' => 'SupportedSeriesType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedSeriesType) {
            $res['SupportedSeriesType'] = [];
            if (null !== $this->supportedSeriesType && \is_array($this->supportedSeriesType)) {
                $n = 0;
                foreach ($this->supportedSeriesType as $item) {
                    $res['SupportedSeriesType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedSeriesTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedSeriesType'])) {
            if (!empty($map['SupportedSeriesType'])) {
                $model->supportedSeriesType = [];
                $n                          = 0;
                foreach ($map['SupportedSeriesType'] as $item) {
                    $model->supportedSeriesType[$n++] = null !== $item ? supportedSeriesType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
