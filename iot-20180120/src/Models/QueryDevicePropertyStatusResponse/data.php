<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusResponse\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var list_
     */
    public $list;
    protected $_name = [
        'list' => 'List',
    ];

    public function validate()
    {
        Model::validateRequired('list', $this->list, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }

        return $model;
    }
}
