<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType;

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
        if (\is_array($this->supportedEditionType)) {
            Model::validateArray($this->supportedEditionType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedEditionType) {
            if (\is_array($this->supportedEditionType)) {
                $res['SupportedEditionType'] = [];
                $n1 = 0;
                foreach ($this->supportedEditionType as $item1) {
                    $res['SupportedEditionType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportedEditionType'])) {
            if (!empty($map['SupportedEditionType'])) {
                $model->supportedEditionType = [];
                $n1 = 0;
                foreach ($map['SupportedEditionType'] as $item1) {
                    $model->supportedEditionType[$n1] = supportedEditionType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
