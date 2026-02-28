<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryPageByApplyIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryPageByApplyIdResponseBody\applyDeviceList\applyDeviceInfo;

class applyDeviceList extends Model
{
    /**
     * @var applyDeviceInfo[]
     */
    public $applyDeviceInfo;
    protected $_name = [
        'applyDeviceInfo' => 'ApplyDeviceInfo',
    ];

    public function validate()
    {
        if (\is_array($this->applyDeviceInfo)) {
            Model::validateArray($this->applyDeviceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyDeviceInfo) {
            if (\is_array($this->applyDeviceInfo)) {
                $res['ApplyDeviceInfo'] = [];
                $n1 = 0;
                foreach ($this->applyDeviceInfo as $item1) {
                    $res['ApplyDeviceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplyDeviceInfo'])) {
            if (!empty($map['ApplyDeviceInfo'])) {
                $model->applyDeviceInfo = [];
                $n1 = 0;
                foreach ($map['ApplyDeviceInfo'] as $item1) {
                    $model->applyDeviceInfo[$n1] = applyDeviceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
