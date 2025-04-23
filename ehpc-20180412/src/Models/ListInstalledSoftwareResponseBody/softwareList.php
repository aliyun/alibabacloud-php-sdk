<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponseBody\softwareList\softwareList;

class softwareList extends Model
{
    /**
     * @var softwareList[]
     */
    public $softwareList;
    protected $_name = [
        'softwareList' => 'SoftwareList',
    ];

    public function validate()
    {
        if (\is_array($this->softwareList)) {
            Model::validateArray($this->softwareList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->softwareList) {
            if (\is_array($this->softwareList)) {
                $res['SoftwareList'] = [];
                $n1 = 0;
                foreach ($this->softwareList as $item1) {
                    $res['SoftwareList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SoftwareList'])) {
            if (!empty($map['SoftwareList'])) {
                $model->softwareList = [];
                $n1 = 0;
                foreach ($map['SoftwareList'] as $item1) {
                    $model->softwareList[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
