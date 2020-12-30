<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class ListRegisteredTagsRequest extends Model
{
    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string[]
     */
    public $lang;
    protected $_name = [
        'storeName' => 'StoreName',
        'lang'      => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRegisteredTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['Lang'])) {
            if (!empty($map['Lang'])) {
                $model->lang = $map['Lang'];
            }
        }

        return $model;
    }
}
