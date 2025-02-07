<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponseBody\applications\application\delegatedScope;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponseBody\applications\application\delegatedScope\predefinedScopes\predefinedScope;

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
        if (\is_array($this->predefinedScope)) {
            Model::validateArray($this->predefinedScope);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->predefinedScope) {
            if (\is_array($this->predefinedScope)) {
                $res['PredefinedScope'] = [];
                $n1                     = 0;
                foreach ($this->predefinedScope as $item1) {
                    $res['PredefinedScope'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PredefinedScope'])) {
            if (!empty($map['PredefinedScope'])) {
                $model->predefinedScope = [];
                $n1                     = 0;
                foreach ($map['PredefinedScope'] as $item1) {
                    $model->predefinedScope[$n1++] = predefinedScope::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
