<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponseBody\serviceGroupsList\listServiceGroups;
use AlibabaCloud\Tea\Model;

class serviceGroupsList extends Model
{
    /**
     * @var listServiceGroups[]
     */
    public $listServiceGroups;
    protected $_name = [
        'listServiceGroups' => 'ListServiceGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listServiceGroups) {
            $res['ListServiceGroups'] = [];
            if (null !== $this->listServiceGroups && \is_array($this->listServiceGroups)) {
                $n = 0;
                foreach ($this->listServiceGroups as $item) {
                    $res['ListServiceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceGroupsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListServiceGroups'])) {
            if (!empty($map['ListServiceGroups'])) {
                $model->listServiceGroups = [];
                $n                        = 0;
                foreach ($map['ListServiceGroups'] as $item) {
                    $model->listServiceGroups[$n++] = null !== $item ? listServiceGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
