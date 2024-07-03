<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PreloadRegionSDGRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $destinationRegionIds;

    /**
     * @var string[]
     */
    public $namespaces;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $redundantNum;

    /**
     * @description This parameter is required.
     *
     * @example sdg-xxxx
     *
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'destinationRegionIds' => 'DestinationRegionIds',
        'namespaces'           => 'Namespaces',
        'redundantNum'         => 'RedundantNum',
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
        if (null !== $this->namespaces) {
            $res['Namespaces'] = $this->namespaces;
        }
        if (null !== $this->redundantNum) {
            $res['RedundantNum'] = $this->redundantNum;
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreloadRegionSDGRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationRegionIds'])) {
            if (!empty($map['DestinationRegionIds'])) {
                $model->destinationRegionIds = $map['DestinationRegionIds'];
            }
        }
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = $map['Namespaces'];
            }
        }
        if (isset($map['RedundantNum'])) {
            $model->redundantNum = $map['RedundantNum'];
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
