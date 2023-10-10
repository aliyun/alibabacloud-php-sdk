<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListComponentsResponseBody\componentList;
use AlibabaCloud\Tea\Model;

class ListComponentsResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The components.
     *
     * @var componentList
     */
    public $componentList;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'          => 'Code',
        'componentList' => 'ComponentList',
        'message'       => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->componentList) {
            $res['ComponentList'] = null !== $this->componentList ? $this->componentList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
