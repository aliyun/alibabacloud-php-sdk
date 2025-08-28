<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType;

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
        if (\is_array($this->supportedSeriesType)) {
            Model::validateArray($this->supportedSeriesType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedSeriesType) {
            if (\is_array($this->supportedSeriesType)) {
                $res['SupportedSeriesType'] = [];
                $n1 = 0;
                foreach ($this->supportedSeriesType as $item1) {
                    $res['SupportedSeriesType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SupportedSeriesType'])) {
            if (!empty($map['SupportedSeriesType'])) {
                $model->supportedSeriesType = [];
                $n1 = 0;
                foreach ($map['SupportedSeriesType'] as $item1) {
                    $model->supportedSeriesType[$n1] = supportedSeriesType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
