<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses;

class supportedEngines extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $supportedEngineVersion;

    /**
     * @var supportedInstanceClasses[]
     */
    public $supportedInstanceClasses;
    protected $_name = [
        'mode' => 'Mode',
        'supportedEngineVersion' => 'SupportedEngineVersion',
        'supportedInstanceClasses' => 'SupportedInstanceClasses',
    ];

    public function validate()
    {
        if (\is_array($this->supportedInstanceClasses)) {
            Model::validateArray($this->supportedInstanceClasses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->supportedEngineVersion) {
            $res['SupportedEngineVersion'] = $this->supportedEngineVersion;
        }

        if (null !== $this->supportedInstanceClasses) {
            if (\is_array($this->supportedInstanceClasses)) {
                $res['SupportedInstanceClasses'] = [];
                $n1 = 0;
                foreach ($this->supportedInstanceClasses as $item1) {
                    $res['SupportedInstanceClasses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['SupportedEngineVersion'])) {
            $model->supportedEngineVersion = $map['SupportedEngineVersion'];
        }

        if (isset($map['SupportedInstanceClasses'])) {
            if (!empty($map['SupportedInstanceClasses'])) {
                $model->supportedInstanceClasses = [];
                $n1 = 0;
                foreach ($map['SupportedInstanceClasses'] as $item1) {
                    $model->supportedInstanceClasses[$n1] = supportedInstanceClasses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
