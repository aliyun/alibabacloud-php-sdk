<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class UpdateAntChainConsortiumRequest extends Model
{
    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $consortiumName;

    /**
     * @var string
     */
    public $consortiumDescription;
    protected $_name = [
        'consortiumId'          => 'ConsortiumId',
        'consortiumName'        => 'ConsortiumName',
        'consortiumDescription' => 'ConsortiumDescription',
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
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->consortiumDescription) {
            $res['ConsortiumDescription'] = $this->consortiumDescription;
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
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['ConsortiumDescription'])) {
            $model->consortiumDescription = $map['ConsortiumDescription'];
        }

        return $model;
    }
}
