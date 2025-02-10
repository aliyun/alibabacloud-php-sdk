<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways\vpnGateway;

use AlibabaCloud\Dara\Model;

class eniInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $eniInstanceId;
    protected $_name = [
        'eniInstanceId' => 'EniInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->eniInstanceId)) {
            Model::validateArray($this->eniInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eniInstanceId) {
            if (\is_array($this->eniInstanceId)) {
                $res['EniInstanceId'] = [];
                $n1                   = 0;
                foreach ($this->eniInstanceId as $item1) {
                    $res['EniInstanceId'][$n1++] = $item1;
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
        if (isset($map['EniInstanceId'])) {
            if (!empty($map['EniInstanceId'])) {
                $model->eniInstanceId = [];
                $n1                   = 0;
                foreach ($map['EniInstanceId'] as $item1) {
                    $model->eniInstanceId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
