<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class UpdateAntChainConsortiumRequest extends Model
{
    /**
     * @var string
     */
    public $consortiumDescription;

    /**
     * @example q0oWq92P
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $consortiumName;
    protected $_name = [
        'consortiumDescription' => 'ConsortiumDescription',
        'consortiumId'          => 'ConsortiumId',
        'consortiumName'        => 'ConsortiumName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumDescription) {
            $res['ConsortiumDescription'] = $this->consortiumDescription;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAntChainConsortiumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumDescription'])) {
            $model->consortiumDescription = $map['ConsortiumDescription'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }

        return $model;
    }
}
