<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulListResponse\vulRecords;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulListResponse\vulRecords\extendContentJson\rpmEntityList;
use AlibabaCloud\Tea\Model;

class extendContentJson extends Model
{
    /**
     * @var rpmEntityList[]
     */
    public $rpmEntityList;
    protected $_name = [
        'rpmEntityList' => 'RpmEntityList',
    ];

    public function validate()
    {
        Model::validateRequired('rpmEntityList', $this->rpmEntityList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rpmEntityList) {
            $res['RpmEntityList'] = [];
            if (null !== $this->rpmEntityList && \is_array($this->rpmEntityList)) {
                $n = 0;
                foreach ($this->rpmEntityList as $item) {
                    $res['RpmEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendContentJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RpmEntityList'])) {
            if (!empty($map['RpmEntityList'])) {
                $model->rpmEntityList = [];
                $n                    = 0;
                foreach ($map['RpmEntityList'] as $item) {
                    $model->rpmEntityList[$n++] = null !== $item ? rpmEntityList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
