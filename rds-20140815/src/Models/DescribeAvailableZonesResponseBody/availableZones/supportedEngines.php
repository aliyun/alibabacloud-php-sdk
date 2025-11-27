<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines\supportedEngineVersions;

class supportedEngines extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var supportedEngineVersions[]
     */
    public $supportedEngineVersions;
    protected $_name = [
        'engine' => 'Engine',
        'supportedEngineVersions' => 'SupportedEngineVersions',
    ];

    public function validate()
    {
        if (\is_array($this->supportedEngineVersions)) {
            Model::validateArray($this->supportedEngineVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->supportedEngineVersions) {
            if (\is_array($this->supportedEngineVersions)) {
                $res['SupportedEngineVersions'] = [];
                $n1 = 0;
                foreach ($this->supportedEngineVersions as $item1) {
                    $res['SupportedEngineVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['SupportedEngineVersions'])) {
            if (!empty($map['SupportedEngineVersions'])) {
                $model->supportedEngineVersions = [];
                $n1 = 0;
                foreach ($map['SupportedEngineVersions'] as $item1) {
                    $model->supportedEngineVersions[$n1] = supportedEngineVersions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
