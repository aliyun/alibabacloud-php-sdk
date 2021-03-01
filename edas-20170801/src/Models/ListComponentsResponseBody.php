<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListComponentsResponseBody\componentList;
use AlibabaCloud\Tea\Model;

class ListComponentsResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var componentList
     */
    public $componentList;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'       => 'Message',
        'componentList' => 'ComponentList',
        'code'          => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->componentList) {
            $res['ComponentList'] = null !== $this->componentList ? $this->componentList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListComponentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ComponentList'])) {
            $model->componentList = componentList::fromMap($map['ComponentList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
