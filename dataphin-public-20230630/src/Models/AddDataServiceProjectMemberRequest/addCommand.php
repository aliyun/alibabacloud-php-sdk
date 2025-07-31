<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddDataServiceProjectMemberRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddDataServiceProjectMemberRequest\addCommand\projectMemberList;
use AlibabaCloud\Tea\Model;

class addCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var projectMemberList[]
     */
    public $projectMemberList;
    protected $_name = [
        'projectMemberList' => 'ProjectMemberList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectMemberList) {
            $res['ProjectMemberList'] = [];
            if (null !== $this->projectMemberList && \is_array($this->projectMemberList)) {
                $n = 0;
                foreach ($this->projectMemberList as $item) {
                    $res['ProjectMemberList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ProjectMemberList'])) {
            if (!empty($map['ProjectMemberList'])) {
                $model->projectMemberList = [];
                $n = 0;
                foreach ($map['ProjectMemberList'] as $item) {
                    $model->projectMemberList[$n++] = null !== $item ? projectMemberList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
