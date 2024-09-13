<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UnloadRegionSDGShrinkRequest extends Model
{
    /**
     * @description The destination nodes.
     *
     * This parameter is required.
     * @var string
     */
    public $destinationRegionIdsShrink;

    /**
     * @description The namespaces.
     *
     * @var string
     */
    public $namespacesShrink;

    /**
     * @description Deletes the shared data group (SDG) ID of the preloaded data.
     *
     * This parameter is required.
     * @example sdg-xxxx
     *
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'destinationRegionIdsShrink' => 'DestinationRegionIds',
        'namespacesShrink'           => 'Namespaces',
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
        if (null !== $this->namespacesShrink) {
            $res['Namespaces'] = $this->namespacesShrink;
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnloadRegionSDGShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationRegionIds'])) {
            $model->destinationRegionIdsShrink = $map['DestinationRegionIds'];
        }
        if (isset($map['Namespaces'])) {
            $model->namespacesShrink = $map['Namespaces'];
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
