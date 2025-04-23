<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares\softwareInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares\softwareInfo\applications\applicationInfo;

class applications extends Model
{
    /**
     * @var applicationInfo[]
     */
    public $applicationInfo;
    protected $_name = [
        'applicationInfo' => 'ApplicationInfo',
    ];

    public function validate()
    {
        if (\is_array($this->applicationInfo)) {
            Model::validateArray($this->applicationInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationInfo) {
            if (\is_array($this->applicationInfo)) {
                $res['ApplicationInfo'] = [];
                $n1 = 0;
                foreach ($this->applicationInfo as $item1) {
                    $res['ApplicationInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplicationInfo'])) {
            if (!empty($map['ApplicationInfo'])) {
                $model->applicationInfo = [];
                $n1 = 0;
                foreach ($map['ApplicationInfo'] as $item1) {
                    $model->applicationInfo[$n1++] = applicationInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
