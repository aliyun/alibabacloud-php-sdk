<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;

class defaultEndpoint extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
