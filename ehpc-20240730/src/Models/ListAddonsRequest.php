<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class ListAddonsRequest extends Model
{
    /**
     * @var string[]
     */
    public $addonIds;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'addonIds' => 'AddonIds',
        'clusterId' => 'ClusterId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->addonIds)) {
            Model::validateArray($this->addonIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonIds) {
            if (\is_array($this->addonIds)) {
                $res['AddonIds'] = [];
                $n1 = 0;
                foreach ($this->addonIds as $item1) {
                    $res['AddonIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AddonIds'])) {
            if (!empty($map['AddonIds'])) {
                $model->addonIds = [];
                $n1 = 0;
                foreach ($map['AddonIds'] as $item1) {
                    $model->addonIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
