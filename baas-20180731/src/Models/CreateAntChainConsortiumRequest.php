<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateAntChainConsortiumRequest extends Model
{
    /**
     * @var string
     */
    public $consortiumDescription;

    /**
     * @var string
     */
    public $consortiumName;
    protected $_name = [
        'consortiumDescription' => 'ConsortiumDescription',
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
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
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
        if (isset($map['ConsortiumDescription'])) {
            $model->consortiumDescription = $map['ConsortiumDescription'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }

        return $model;
    }
}
