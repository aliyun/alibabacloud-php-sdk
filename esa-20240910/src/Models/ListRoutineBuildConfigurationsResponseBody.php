<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineBuildConfigurationsResponseBody\routineBuildConfigurations;

class ListRoutineBuildConfigurationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var routineBuildConfigurations[]
     */
    public $routineBuildConfigurations;
    protected $_name = [
        'requestId' => 'RequestId',
        'routineBuildConfigurations' => 'RoutineBuildConfigurations',
    ];

    public function validate()
    {
        if (\is_array($this->routineBuildConfigurations)) {
            Model::validateArray($this->routineBuildConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routineBuildConfigurations) {
            if (\is_array($this->routineBuildConfigurations)) {
                $res['RoutineBuildConfigurations'] = [];
                $n1 = 0;
                foreach ($this->routineBuildConfigurations as $item1) {
                    $res['RoutineBuildConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoutineBuildConfigurations'])) {
            if (!empty($map['RoutineBuildConfigurations'])) {
                $model->routineBuildConfigurations = [];
                $n1 = 0;
                foreach ($map['RoutineBuildConfigurations'] as $item1) {
                    $model->routineBuildConfigurations[$n1] = routineBuildConfigurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
