<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\dataDisks\dataDisksInfo;

class dataDisks extends Model
{
    /**
     * @var dataDisksInfo[]
     */
    public $dataDisksInfo;
    protected $_name = [
        'dataDisksInfo' => 'DataDisksInfo',
    ];

    public function validate()
    {
        if (\is_array($this->dataDisksInfo)) {
            Model::validateArray($this->dataDisksInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDisksInfo) {
            if (\is_array($this->dataDisksInfo)) {
                $res['DataDisksInfo'] = [];
                $n1 = 0;
                foreach ($this->dataDisksInfo as $item1) {
                    $res['DataDisksInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataDisksInfo'])) {
            if (!empty($map['DataDisksInfo'])) {
                $model->dataDisksInfo = [];
                $n1 = 0;
                foreach ($map['DataDisksInfo'] as $item1) {
                    $model->dataDisksInfo[$n1++] = dataDisksInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
