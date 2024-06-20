<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeFabricConsortiumMembersRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example consortium-lianmenyumingyi-hc5d1bwl****
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $location;
    protected $_name = [
        'consortiumId' => 'ConsortiumId',
        'location'     => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFabricConsortiumMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
