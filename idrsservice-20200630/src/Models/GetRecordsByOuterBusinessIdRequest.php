<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class GetRecordsByOuterBusinessIdRequest extends Model
{
    /**
     * @example ads32efef43
     *
     * @var string
     */
    public $outerBusinessId;
    protected $_name = [
        'outerBusinessId' => 'OuterBusinessId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outerBusinessId) {
            $res['OuterBusinessId'] = $this->outerBusinessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRecordsByOuterBusinessIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OuterBusinessId'])) {
            $model->outerBusinessId = $map['OuterBusinessId'];
        }

        return $model;
    }
}
