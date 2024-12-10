<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\engineVersionList\engineVersion;
use AlibabaCloud\Tea\Model;

class engineVersionList extends Model
{
    /**
     * @var engineVersion[]
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
            $res['EngineVersion'] = [];
            if (null !== $this->engineVersion && \is_array($this->engineVersion)) {
                $n = 0;
                foreach ($this->engineVersion as $item) {
                    $res['EngineVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return engineVersionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngineVersion'])) {
            if (!empty($map['EngineVersion'])) {
                $model->engineVersion = [];
                $n                    = 0;
                foreach ($map['EngineVersion'] as $item) {
                    $model->engineVersion[$n++] = null !== $item ? engineVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
