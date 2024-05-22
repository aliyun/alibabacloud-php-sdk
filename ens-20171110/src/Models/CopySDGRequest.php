<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CopySDGRequest extends Model
{
    /**
     * @description The destination nodes.
     *
     * This parameter is required.
     * @var string[]
     */
    public $destinationRegionIds;

    /**
     * @description The ID of the SDG that you want to copy.
     *
     * This parameter is required.
     * @example sdg-xxx
     *
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'destinationRegionIds' => 'DestinationRegionIds',
        'SDGId'                => 'SDGId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationRegionIds) {
            $res['DestinationRegionIds'] = $this->destinationRegionIds;
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopySDGRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationRegionIds'])) {
            if (!empty($map['DestinationRegionIds'])) {
                $model->destinationRegionIds = $map['DestinationRegionIds'];
            }
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
