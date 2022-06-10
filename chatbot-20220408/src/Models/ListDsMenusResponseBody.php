<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListDsMenusResponseBody\menus;
use AlibabaCloud\Tea\Model;

class ListDsMenusResponseBody extends Model
{
    /**
     * @var string
     */
    public $ext;

    /**
     * @var menus[]
     */
    public $menus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ext'       => 'Ext',
        'menus'     => 'Menus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->menus) {
            $res['Menus'] = [];
            if (null !== $this->menus && \is_array($this->menus)) {
                $n = 0;
                foreach ($this->menus as $item) {
                    $res['Menus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDsMenusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Menus'])) {
            if (!empty($map['Menus'])) {
                $model->menus = [];
                $n            = 0;
                foreach ($map['Menus'] as $item) {
                    $model->menus[$n++] = null !== $item ? menus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
