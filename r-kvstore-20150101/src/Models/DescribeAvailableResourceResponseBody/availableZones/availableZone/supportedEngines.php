<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine;

class supportedEngines extends Model
{
    /**
     * @var supportedEngine[]
     */
    public $supportedEngine;
    protected $_name = [
        'supportedEngine' => 'SupportedEngine',
    ];

    public function validate()
    {
        if (\is_array($this->supportedEngine)) {
            Model::validateArray($this->supportedEngine);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedEngine) {
            if (\is_array($this->supportedEngine)) {
                $res['SupportedEngine'] = [];
                $n1 = 0;
                foreach ($this->supportedEngine as $item1) {
                    $res['SupportedEngine'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportedEngine'])) {
            if (!empty($map['SupportedEngine'])) {
                $model->supportedEngine = [];
                $n1 = 0;
                foreach ($map['SupportedEngine'] as $item1) {
                    $model->supportedEngine[$n1++] = supportedEngine::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
