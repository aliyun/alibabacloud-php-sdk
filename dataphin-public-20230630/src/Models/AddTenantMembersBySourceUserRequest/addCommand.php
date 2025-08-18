<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersBySourceUserRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersBySourceUserRequest\addCommand\sourceUserList;

class addCommand extends Model
{
    /**
     * @var sourceUserList[]
     */
    public $sourceUserList;
    protected $_name = [
        'sourceUserList' => 'SourceUserList',
    ];

    public function validate()
    {
        if (\is_array($this->sourceUserList)) {
            Model::validateArray($this->sourceUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceUserList) {
            if (\is_array($this->sourceUserList)) {
                $res['SourceUserList'] = [];
                $n1 = 0;
                foreach ($this->sourceUserList as $item1) {
                    $res['SourceUserList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SourceUserList'])) {
            if (!empty($map['SourceUserList'])) {
                $model->sourceUserList = [];
                $n1 = 0;
                foreach ($map['SourceUserList'] as $item1) {
                    $model->sourceUserList[$n1] = sourceUserList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
