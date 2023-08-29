<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMpsSchedulerListResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMpsSchedulerListResponseBody\resultContent\data;
use AlibabaCloud\Tea\Model;

class resultContent extends Model
{
    /**
     * @var data
     */
    public $data;
    protected $_name = [
        'data' => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        return $model;
    }
}
