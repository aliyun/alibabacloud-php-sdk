<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesResponseBody extends Model
{
    /**
     * @example E7B7D598-B080-5C8E-AA35-D43EC0D5F886
     *
     * @var string
     */
    public $tequestId;
    protected $_name = [
        'tequestId' => 'tequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tequestId) {
            $res['tequestId'] = $this->tequestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tequestId'])) {
            $model->tequestId = $map['tequestId'];
        }

        return $model;
    }
}
