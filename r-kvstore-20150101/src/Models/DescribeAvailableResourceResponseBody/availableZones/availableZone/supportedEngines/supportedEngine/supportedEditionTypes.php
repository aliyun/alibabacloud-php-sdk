<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType;
use AlibabaCloud\Tea\Model;

class supportedEditionTypes extends Model
{
    /**
     * @var supportedEditionType[]
     */
    public $supportedEditionType;
    protected $_name = [
        'supportedEditionType' => 'SupportedEditionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedEditionType) {
            $res['SupportedEditionType'] = [];
            if (null !== $this->supportedEditionType && \is_array($this->supportedEditionType)) {
                $n = 0;
                foreach ($this->supportedEditionType as $item) {
                    $res['SupportedEditionType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEditionTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedEditionType'])) {
            if (!empty($map['SupportedEditionType'])) {
                $model->supportedEditionType = [];
                $n                           = 0;
                foreach ($map['SupportedEditionType'] as $item) {
                    $model->supportedEditionType[$n++] = null !== $item ? supportedEditionType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
