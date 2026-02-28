<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryImportedDeviceByApplyIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryImportedDeviceByApplyIdResponseBody\deviceList\device;

class deviceList extends Model
{
    /**
     * @var device[]
     */
    public $device;
    protected $_name = [
        'device' => 'device',
    ];

    public function validate()
    {
        if (\is_array($this->device)) {
            Model::validateArray($this->device);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->device) {
            if (\is_array($this->device)) {
                $res['device'] = [];
                $n1 = 0;
                foreach ($this->device as $item1) {
                    $res['device'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['device'])) {
            if (!empty($map['device'])) {
                $model->device = [];
                $n1 = 0;
                foreach ($map['device'] as $item1) {
                    $model->device[$n1] = device::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
