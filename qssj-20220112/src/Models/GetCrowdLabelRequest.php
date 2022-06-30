<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetCrowdLabelRequest extends Model
{
    /**
     * @var string
     */
    public $cateIds;
    protected $_name = [
        'cateIds' => 'CateIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateIds) {
            $res['CateIds'] = $this->cateIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCrowdLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateIds'])) {
            $model->cateIds = $map['CateIds'];
        }

        return $model;
    }
}
