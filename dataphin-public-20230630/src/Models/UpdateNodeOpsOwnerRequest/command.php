<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateNodeOpsOwnerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateNodeOpsOwnerRequest\command\nodeIdList;

class command extends Model
{
    /**
     * @var nodeIdList[]
     */
    public $nodeIdList;

    /**
     * @var string[]
     */
    public $opsOwnerList;
    protected $_name = [
        'nodeIdList' => 'NodeIdList',
        'opsOwnerList' => 'OpsOwnerList',
    ];

    public function validate()
    {
        if (\is_array($this->nodeIdList)) {
            Model::validateArray($this->nodeIdList);
        }
        if (\is_array($this->opsOwnerList)) {
            Model::validateArray($this->opsOwnerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeIdList) {
            if (\is_array($this->nodeIdList)) {
                $res['NodeIdList'] = [];
                $n1 = 0;
                foreach ($this->nodeIdList as $item1) {
                    $res['NodeIdList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->opsOwnerList) {
            if (\is_array($this->opsOwnerList)) {
                $res['OpsOwnerList'] = [];
                $n1 = 0;
                foreach ($this->opsOwnerList as $item1) {
                    $res['OpsOwnerList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = [];
                $n1 = 0;
                foreach ($map['NodeIdList'] as $item1) {
                    $model->nodeIdList[$n1] = nodeIdList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OpsOwnerList'])) {
            if (!empty($map['OpsOwnerList'])) {
                $model->opsOwnerList = [];
                $n1 = 0;
                foreach ($map['OpsOwnerList'] as $item1) {
                    $model->opsOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
