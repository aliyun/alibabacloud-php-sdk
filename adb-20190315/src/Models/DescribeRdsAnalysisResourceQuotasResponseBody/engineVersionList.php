<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\engineVersionList\engineVersion;

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
                $n1 = 0;
                foreach ($this->engineVersion as $item1) {
                    $res['EngineVersion'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['EngineVersion'] as $item1) {
                    $model->engineVersion[$n1++] = engineVersion::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
