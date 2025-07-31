<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersBySourceUserRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersBySourceUserRequest\addCommand\sourceUserList;
use AlibabaCloud\Tea\Model;

class addCommand extends Model
{
    /**
     * @var sourceUserList[]
     */
    public $sourceUserList;
    protected $_name = [
        'sourceUserList' => 'SourceUserList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceUserList) {
            $res['SourceUserList'] = [];
            if (null !== $this->sourceUserList && \is_array($this->sourceUserList)) {
                $n = 0;
                foreach ($this->sourceUserList as $item) {
                    $res['SourceUserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceUserList'])) {
            if (!empty($map['SourceUserList'])) {
                $model->sourceUserList = [];
                $n = 0;
                foreach ($map['SourceUserList'] as $item) {
                    $model->sourceUserList[$n++] = null !== $item ? sourceUserList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
