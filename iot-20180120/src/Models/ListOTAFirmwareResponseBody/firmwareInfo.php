<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAFirmwareResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAFirmwareResponseBody\firmwareInfo\simpleFirmwareInfo;

class firmwareInfo extends Model
{
    /**
     * @var simpleFirmwareInfo[]
     */
    public $simpleFirmwareInfo;
    protected $_name = [
        'simpleFirmwareInfo' => 'SimpleFirmwareInfo',
    ];

    public function validate()
    {
        if (\is_array($this->simpleFirmwareInfo)) {
            Model::validateArray($this->simpleFirmwareInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->simpleFirmwareInfo) {
            if (\is_array($this->simpleFirmwareInfo)) {
                $res['SimpleFirmwareInfo'] = [];
                $n1 = 0;
                foreach ($this->simpleFirmwareInfo as $item1) {
                    $res['SimpleFirmwareInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SimpleFirmwareInfo'])) {
            if (!empty($map['SimpleFirmwareInfo'])) {
                $model->simpleFirmwareInfo = [];
                $n1 = 0;
                foreach ($map['SimpleFirmwareInfo'] as $item1) {
                    $model->simpleFirmwareInfo[$n1] = simpleFirmwareInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
