<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CopySDGShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $destinationRegionIdsShrink;

    /**
     * @example sdg-xxx
     *
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'destinationRegionIdsShrink' => 'DestinationRegionIds',
        'SDGId'                      => 'SDGId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationRegionIdsShrink) {
            $res['DestinationRegionIds'] = $this->destinationRegionIdsShrink;
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopySDGShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationRegionIds'])) {
            $model->destinationRegionIdsShrink = $map['DestinationRegionIds'];
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
