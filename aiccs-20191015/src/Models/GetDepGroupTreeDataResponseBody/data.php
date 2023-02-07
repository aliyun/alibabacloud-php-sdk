<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepGroupTreeDataResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepGroupTreeDataResponseBody\data\groupDTOS;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $depGroupId;

    /**
     * @var string
     */
    public $depGroupName;

    /**
     * @var groupDTOS[]
     */
    public $groupDTOS;
    protected $_name = [
        'depGroupId'   => 'DepGroupId',
        'depGroupName' => 'DepGroupName',
        'groupDTOS'    => 'GroupDTOS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depGroupId) {
            $res['DepGroupId'] = $this->depGroupId;
        }
        if (null !== $this->depGroupName) {
            $res['DepGroupName'] = $this->depGroupName;
        }
        if (null !== $this->groupDTOS) {
            $res['GroupDTOS'] = [];
            if (null !== $this->groupDTOS && \is_array($this->groupDTOS)) {
                $n = 0;
                foreach ($this->groupDTOS as $item) {
                    $res['GroupDTOS'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepGroupId'])) {
            $model->depGroupId = $map['DepGroupId'];
        }
        if (isset($map['DepGroupName'])) {
            $model->depGroupName = $map['DepGroupName'];
        }
        if (isset($map['GroupDTOS'])) {
            if (!empty($map['GroupDTOS'])) {
                $model->groupDTOS = [];
                $n                = 0;
                foreach ($map['GroupDTOS'] as $item) {
                    $model->groupDTOS[$n++] = null !== $item ? groupDTOS::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
