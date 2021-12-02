<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class fullNatTableIds extends Model
{
    /**
     * @var string[]
     */
    public $fullNatTableId;
    protected $_name = [
        'fullNatTableId' => 'FullNatTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullNatTableId) {
            $res['FullNatTableId'] = $this->fullNatTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullNatTableIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullNatTableId'])) {
            if (!empty($map['FullNatTableId'])) {
                $model->fullNatTableId = $map['FullNatTableId'];
            }
        }

        return $model;
    }
}
