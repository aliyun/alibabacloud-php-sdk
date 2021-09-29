<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListTriggersResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListTriggersResponseBody\triggerList\pagination;
use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListTriggersResponseBody\triggerList\triggers;
use AlibabaCloud\Tea\Model;

class triggerList extends Model
{
    /**
     * @var pagination
     */
    public $pagination;

    /**
     * @var triggers[]
     */
    public $triggers;
    protected $_name = [
        'pagination' => 'Pagination',
        'triggers'   => 'Triggers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = [];
            if (null !== $this->triggers && \is_array($this->triggers)) {
                $n = 0;
                foreach ($this->triggers as $item) {
                    $res['Triggers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }
        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = [];
                $n               = 0;
                foreach ($map['Triggers'] as $item) {
                    $model->triggers[$n++] = null !== $item ? triggers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
