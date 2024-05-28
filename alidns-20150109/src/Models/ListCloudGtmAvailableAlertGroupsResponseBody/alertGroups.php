<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAvailableAlertGroupsResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAvailableAlertGroupsResponseBody\alertGroups\alertGroup;
use AlibabaCloud\Tea\Model;

class alertGroups extends Model
{
    /**
     * @var alertGroup[]
     */
    public $alertGroup;
    protected $_name = [
        'alertGroup' => 'AlertGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = [];
            if (null !== $this->alertGroup && \is_array($this->alertGroup)) {
                $n = 0;
                foreach ($this->alertGroup as $item) {
                    $res['AlertGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertGroup'])) {
            if (!empty($map['AlertGroup'])) {
                $model->alertGroup = [];
                $n                 = 0;
                foreach ($map['AlertGroup'] as $item) {
                    $model->alertGroup[$n++] = null !== $item ? alertGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
