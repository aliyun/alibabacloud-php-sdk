<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances;

use AlibabaCloud\Dara\Model;

class sdgDeployInfo extends Model
{
    /**
     * @var string
     */
    public $SDGId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'SDGId' => 'SDGId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
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
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
