<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews\preview;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews\preview\switchInfos\switchInfo;

class switchInfos extends Model
{
    /**
     * @var switchInfo[]
     */
    public $switchInfo;
    protected $_name = [
        'switchInfo' => 'SwitchInfo',
    ];

    public function validate()
    {
        if (\is_array($this->switchInfo)) {
            Model::validateArray($this->switchInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->switchInfo) {
            if (\is_array($this->switchInfo)) {
                $res['SwitchInfo'] = [];
                $n1 = 0;
                foreach ($this->switchInfo as $item1) {
                    $res['SwitchInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SwitchInfo'])) {
            if (!empty($map['SwitchInfo'])) {
                $model->switchInfo = [];
                $n1 = 0;
                foreach ($map['SwitchInfo'] as $item1) {
                    $model->switchInfo[$n1++] = switchInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
