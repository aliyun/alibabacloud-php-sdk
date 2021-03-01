<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList\listConsumedServices;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @var string[]
     */
    public $group;
    protected $_name = [
        'group' => 'group',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['group'])) {
            if (!empty($map['group'])) {
                $model->group = $map['group'];
            }
        }

        return $model;
    }
}
