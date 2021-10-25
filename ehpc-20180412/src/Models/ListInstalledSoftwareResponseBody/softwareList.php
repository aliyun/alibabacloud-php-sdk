<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponseBody;

use AlibabaCloud\Tea\Model;

class softwareList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponseBody\softwareList\softwareList[]
     */
    public $softwareList;
    protected $_name = [
        'softwareList' => 'SoftwareList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->softwareList) {
            $res['SoftwareList'] = [];
            if (null !== $this->softwareList && \is_array($this->softwareList)) {
                $n = 0;
                foreach ($this->softwareList as $item) {
                    $res['SoftwareList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return softwareList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SoftwareList'])) {
            if (!empty($map['SoftwareList'])) {
                $model->softwareList = [];
                $n                   = 0;
                foreach ($map['SoftwareList'] as $item) {
                    $model->softwareList[$n++] = null !== $item ? \AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponseBody\softwareList\softwareList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
