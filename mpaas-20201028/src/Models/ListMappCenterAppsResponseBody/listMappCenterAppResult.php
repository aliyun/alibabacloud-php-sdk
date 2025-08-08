<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterAppsResponseBody\listMappCenterAppResult\mappCenterAppList;

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
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->mappCenterAppList)) {
            Model::validateArray($this->mappCenterAppList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mappCenterAppList) {
            if (\is_array($this->mappCenterAppList)) {
                $res['MappCenterAppList'] = [];
                $n1 = 0;
                foreach ($this->mappCenterAppList as $item1) {
                    $res['MappCenterAppList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MappCenterAppList'])) {
            if (!empty($map['MappCenterAppList'])) {
                $model->mappCenterAppList = [];
                $n1 = 0;
                foreach ($map['MappCenterAppList'] as $item1) {
                    $model->mappCenterAppList[$n1] = mappCenterAppList::fromMap($item1);
                    ++$n1;
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
