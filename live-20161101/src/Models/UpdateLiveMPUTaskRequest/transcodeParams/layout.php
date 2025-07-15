<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\transcodeParams;

use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\transcodeParams\layout\userPanes;
use AlibabaCloud\Tea\Model;

class layout extends Model
{
    /**
     * @description The information about the panes.
     *
     * @var userPanes[]
     */
    public $userPanes;
    protected $_name = [
        'userPanes' => 'UserPanes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPanes) {
            $res['UserPanes'] = [];
            if (null !== $this->userPanes && \is_array($this->userPanes)) {
                $n = 0;
                foreach ($this->userPanes as $item) {
                    $res['UserPanes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layout
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPanes'])) {
            if (!empty($map['UserPanes'])) {
                $model->userPanes = [];
                $n = 0;
                foreach ($map['UserPanes'] as $item) {
                    $model->userPanes[$n++] = null !== $item ? userPanes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
