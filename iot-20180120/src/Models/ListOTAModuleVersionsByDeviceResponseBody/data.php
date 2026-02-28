<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleVersionsByDeviceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleVersionsByDeviceResponseBody\data\simpleOTAModuleInfo;

class data extends Model
{
    /**
     * @var simpleOTAModuleInfo[]
     */
    public $simpleOTAModuleInfo;
    protected $_name = [
        'simpleOTAModuleInfo' => 'SimpleOTAModuleInfo',
    ];

    public function validate()
    {
        if (\is_array($this->simpleOTAModuleInfo)) {
            Model::validateArray($this->simpleOTAModuleInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->simpleOTAModuleInfo) {
            if (\is_array($this->simpleOTAModuleInfo)) {
                $res['SimpleOTAModuleInfo'] = [];
                $n1 = 0;
                foreach ($this->simpleOTAModuleInfo as $item1) {
                    $res['SimpleOTAModuleInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SimpleOTAModuleInfo'])) {
            if (!empty($map['SimpleOTAModuleInfo'])) {
                $model->simpleOTAModuleInfo = [];
                $n1 = 0;
                foreach ($map['SimpleOTAModuleInfo'] as $item1) {
                    $model->simpleOTAModuleInfo[$n1] = simpleOTAModuleInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
