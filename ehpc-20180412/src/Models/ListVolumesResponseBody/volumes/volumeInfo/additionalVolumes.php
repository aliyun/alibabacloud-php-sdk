<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponseBody\volumes\volumeInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponseBody\volumes\volumeInfo\additionalVolumes\volumeInfo;

class additionalVolumes extends Model
{
    /**
     * @var volumeInfo[]
     */
    public $volumeInfo;
    protected $_name = [
        'volumeInfo' => 'VolumeInfo',
    ];

    public function validate()
    {
        if (\is_array($this->volumeInfo)) {
            Model::validateArray($this->volumeInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->volumeInfo) {
            if (\is_array($this->volumeInfo)) {
                $res['VolumeInfo'] = [];
                $n1 = 0;
                foreach ($this->volumeInfo as $item1) {
                    $res['VolumeInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VolumeInfo'])) {
            if (!empty($map['VolumeInfo'])) {
                $model->volumeInfo = [];
                $n1 = 0;
                foreach ($map['VolumeInfo'] as $item1) {
                    $model->volumeInfo[$n1++] = volumeInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
