<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var skillGroupConfig[]
     */
    public $skillGroupConfig;
    protected $_name = [
        'skillGroupConfig' => 'SkillGroupConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupConfig) {
            $res['SkillGroupConfig'] = [];
            if (null !== $this->skillGroupConfig && \is_array($this->skillGroupConfig)) {
                $n = 0;
                foreach ($this->skillGroupConfig as $item) {
                    $res['SkillGroupConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroupConfig'])) {
            if (!empty($map['SkillGroupConfig'])) {
                $model->skillGroupConfig = [];
                $n                       = 0;
                foreach ($map['SkillGroupConfig'] as $item) {
                    $model->skillGroupConfig[$n++] = null !== $item ? skillGroupConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
