<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListComponentsResponseBody\componentList;

class ListComponentsResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var componentList
     */
    public $componentList;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'Code',
        'componentList' => 'ComponentList',
        'message' => 'Message',
    ];

    public function validate()
    {
        if (null !== $this->componentList) {
            $this->componentList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->componentList) {
            $res['ComponentList'] = null !== $this->componentList ? $this->componentList->toArray($noStream) : $this->componentList;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ComponentList'])) {
            $model->componentList = componentList::fromMap($map['ComponentList']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
