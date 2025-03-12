<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponseBody\applications\application\delegatedScope;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponseBody\applications\application\delegatedScope\predefinedScopes\predefinedScope;
use AlibabaCloud\Tea\Model;

class predefinedScopes extends Model
{
    /**
     * @var predefinedScope[]
     */
    public $predefinedScope;
    protected $_name = [
        'predefinedScope' => 'PredefinedScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->predefinedScope) {
            $res['PredefinedScope'] = [];
            if (null !== $this->predefinedScope && \is_array($this->predefinedScope)) {
                $n = 0;
                foreach ($this->predefinedScope as $item) {
                    $res['PredefinedScope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return predefinedScopes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PredefinedScope'])) {
            if (!empty($map['PredefinedScope'])) {
                $model->predefinedScope = [];
                $n                      = 0;
                foreach ($map['PredefinedScope'] as $item) {
                    $model->predefinedScope[$n++] = null !== $item ? predefinedScope::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
