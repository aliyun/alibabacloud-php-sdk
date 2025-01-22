<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListPrivateAccessApplicationsForDynamicRouteRequest extends Model
{
    /**
     * @var string[]
     */
    public $dynamicRouteIds;
    protected $_name = [
        'dynamicRouteIds' => 'DynamicRouteIds',
    ];

    public function validate()
    {
        if (\is_array($this->dynamicRouteIds)) {
            Model::validateArray($this->dynamicRouteIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicRouteIds) {
            if (\is_array($this->dynamicRouteIds)) {
                $res['DynamicRouteIds'] = [];
                $n1                     = 0;
                foreach ($this->dynamicRouteIds as $item1) {
                    $res['DynamicRouteIds'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicRouteIds'])) {
            if (!empty($map['DynamicRouteIds'])) {
                $model->dynamicRouteIds = [];
                $n1                     = 0;
                foreach ($map['DynamicRouteIds'] as $item1) {
                    $model->dynamicRouteIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
