<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListGroupsResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListGroupsResponseBody\data\appGroups;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var appGroups[]
     */
    public $appGroups;
    protected $_name = [
        'appGroups' => 'AppGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroups) {
            $res['AppGroups'] = [];
            if (null !== $this->appGroups && \is_array($this->appGroups)) {
                $n = 0;
                foreach ($this->appGroups as $item) {
                    $res['AppGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGroups'])) {
            if (!empty($map['AppGroups'])) {
                $model->appGroups = [];
                $n                = 0;
                foreach ($map['AppGroups'] as $item) {
                    $model->appGroups[$n++] = null !== $item ? appGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
