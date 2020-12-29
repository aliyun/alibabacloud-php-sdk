<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CreateAntChainConsortiumRequest extends Model
{
    /**
     * @var string
     */
    public $consortiumName;

    /**
     * @var string
     */
    public $consortiumDescription;
    protected $_name = [
        'consortiumName'        => 'ConsortiumName',
        'consortiumDescription' => 'ConsortiumDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return CreateAntChainConsortiumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['ConsortiumDescription'])) {
            $model->consortiumDescription = $map['ConsortiumDescription'];
        }

        return $model;
    }
}
