<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableEngineVersionResponseBody;

use AlibabaCloud\Dara\Model;

class engineVersions extends Model
{
    /**
     * @var string[]
     */
    public $engineVersion;
    protected $_name = [
        'engineVersion' => 'EngineVersion',
    ];

    public function validate()
    {
        if (\is_array($this->engineVersion)) {
            Model::validateArray($this->engineVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engineVersion) {
            if (\is_array($this->engineVersion)) {
                $res['EngineVersion'] = [];
                $n1                   = 0;
                foreach ($this->engineVersion as $item1) {
                    $res['EngineVersion'][$n1++] = $item1;
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
        if (isset($map['EngineVersion'])) {
            if (!empty($map['EngineVersion'])) {
                $model->engineVersion = [];
                $n1                   = 0;
                foreach ($map['EngineVersion'] as $item1) {
                    $model->engineVersion[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
