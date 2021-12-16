<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnRealTimeDeliveryProjectResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnRealTimeDeliveryProjectResponseBody\content\projects;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var projects[]
     */
    public $projects;
    protected $_name = [
        'projects' => 'Projects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projects) {
            $res['Projects'] = [];
            if (null !== $this->projects && \is_array($this->projects)) {
                $n = 0;
                foreach ($this->projects as $item) {
                    $res['Projects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = [];
                $n               = 0;
                foreach ($map['Projects'] as $item) {
                    $model->projects[$n++] = null !== $item ? projects::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
