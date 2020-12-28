<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetWorkbenchTokenResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetWorkbenchTokenResponseBody\root\instanceLoginView;
use AlibabaCloud\Tea\Model;

class root extends Model
{
    /**
     * @var instanceLoginView
     */
    public $instanceLoginView;
    protected $_name = [
        'instanceLoginView' => 'instanceLoginView',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceLoginView) {
            $res['instanceLoginView'] = null !== $this->instanceLoginView ? $this->instanceLoginView->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return root
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceLoginView'])) {
            $model->instanceLoginView = instanceLoginView::fromMap($map['instanceLoginView']);
        }

        return $model;
    }
}
