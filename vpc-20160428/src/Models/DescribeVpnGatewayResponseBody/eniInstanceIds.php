<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eniInstanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniInstanceId'])) {
            if (!empty($map['EniInstanceId'])) {
                $model->eniInstanceId = $map['EniInstanceId'];
            }
        }

        return $model;
    }
}
