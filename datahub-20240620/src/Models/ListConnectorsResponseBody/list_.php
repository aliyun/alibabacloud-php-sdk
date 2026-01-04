<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models\ListConnectorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListConnectorsResponseBody\list_\connector;

class list_ extends Model
{
    /**
     * @var connector[]
     */
    public $connector;
    protected $_name = [
        'connector' => 'Connector',
    ];

    public function validate()
    {
        if (\is_array($this->connector)) {
            Model::validateArray($this->connector);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connector) {
            if (\is_array($this->connector)) {
                $res['Connector'] = [];
                $n1 = 0;
                foreach ($this->connector as $item1) {
                    $res['Connector'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Connector'])) {
            if (!empty($map['Connector'])) {
                $model->connector = [];
                $n1 = 0;
                foreach ($map['Connector'] as $item1) {
                    $model->connector[$n1] = connector::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
