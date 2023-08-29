<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterAppsResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterAppsResponseBody\listMappCenterAppResult\mappCenterAppList;
use AlibabaCloud\Tea\Model;

class listMappCenterAppResult extends Model
{
    /**
     * @var mappCenterAppList[]
     */
    public $mappCenterAppList;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'mappCenterAppList' => 'MappCenterAppList',
        'resultMsg'         => 'ResultMsg',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappCenterAppList) {
            $res['MappCenterAppList'] = [];
            if (null !== $this->mappCenterAppList && \is_array($this->mappCenterAppList)) {
                $n = 0;
                foreach ($this->mappCenterAppList as $item) {
                    $res['MappCenterAppList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listMappCenterAppResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MappCenterAppList'])) {
            if (!empty($map['MappCenterAppList'])) {
                $model->mappCenterAppList = [];
                $n                        = 0;
                foreach ($map['MappCenterAppList'] as $item) {
                    $model->mappCenterAppList[$n++] = null !== $item ? mappCenterAppList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
