<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig;

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
        if (\is_array($this->skillGroupConfig)) {
            Model::validateArray($this->skillGroupConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skillGroupConfig) {
            if (\is_array($this->skillGroupConfig)) {
                $res['SkillGroupConfig'] = [];
                $n1 = 0;
                foreach ($this->skillGroupConfig as $item1) {
                    $res['SkillGroupConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SkillGroupConfig'])) {
            if (!empty($map['SkillGroupConfig'])) {
                $model->skillGroupConfig = [];
                $n1 = 0;
                foreach ($map['SkillGroupConfig'] as $item1) {
                    $model->skillGroupConfig[$n1++] = skillGroupConfig::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
