<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\TaskDetail;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\SimpleUser;
use AlibabaCloud\Tea\Model;

class taskWorkflow extends Model
{
    /**
     * @var mixed[]
     */
    public $exif;

    /**
     * @var string[]
     */
    public $groups;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var SimpleUser[]
     */
    public $users;
    protected $_name = [
        'exif'     => 'Exif',
        'groups'   => 'Groups',
        'nodeName' => 'NodeName',
        'users'    => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
        }
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskWorkflow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
        }
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = $map['Groups'];
            }
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? SimpleUser::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
