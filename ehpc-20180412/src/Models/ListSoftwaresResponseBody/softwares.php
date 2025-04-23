<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares\softwareInfo;

class softwares extends Model
{
    /**
     * @var softwareInfo[]
     */
    public $softwareInfo;
    protected $_name = [
        'softwareInfo' => 'SoftwareInfo',
    ];

    public function validate()
    {
        if (\is_array($this->softwareInfo)) {
            Model::validateArray($this->softwareInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->softwareInfo) {
            if (\is_array($this->softwareInfo)) {
                $res['SoftwareInfo'] = [];
                $n1 = 0;
                foreach ($this->softwareInfo as $item1) {
                    $res['SoftwareInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SoftwareInfo'])) {
            if (!empty($map['SoftwareInfo'])) {
                $model->softwareInfo = [];
                $n1 = 0;
                foreach ($map['SoftwareInfo'] as $item1) {
                    $model->softwareInfo[$n1++] = softwareInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
