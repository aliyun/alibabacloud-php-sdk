<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class snatTableIds extends Model
{
    /**
     * @var string[]
     */
    public $snatTableId;
    protected $_name = [
        'snatTableId' => 'SnatTableId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snatTableIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnatTableId'])) {
            if (!empty($map['SnatTableId'])) {
                $model->snatTableId = $map['SnatTableId'];
            }
        }

        return $model;
    }
}
