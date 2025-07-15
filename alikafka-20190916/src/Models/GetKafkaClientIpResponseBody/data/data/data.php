<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponseBody\data\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The response parameters.
     *
     * @var data\data
     */
    public $data;

    /**
     * @description The request name.
     *
     * >  The value of this parameter indicates the type of request that the client sends to the broker within the specified period of time.
     *
     * @example OFFSET_COMMIT
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'data' => 'Data',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Data'])) {
            $model->data = data\data::fromMap($map['Data']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
