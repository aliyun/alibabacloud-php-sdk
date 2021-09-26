<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyEventTypeStatusRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $subTypeIds;
    protected $_name = [
        'lang'       => 'Lang',
        'subTypeIds' => 'SubTypeIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->subTypeIds) {
            $res['SubTypeIds'] = $this->subTypeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEventTypeStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SubTypeIds'])) {
            $model->subTypeIds = $map['SubTypeIds'];
        }

        return $model;
    }
}
