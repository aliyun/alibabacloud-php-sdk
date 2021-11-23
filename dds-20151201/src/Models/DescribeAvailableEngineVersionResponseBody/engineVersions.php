<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableEngineVersionResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return engineVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngineVersion'])) {
            if (!empty($map['EngineVersion'])) {
                $model->engineVersion = $map['EngineVersion'];
            }
        }

        return $model;
    }
}
