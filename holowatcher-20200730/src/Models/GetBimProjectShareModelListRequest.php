<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class GetBimProjectShareModelListRequest extends Model
{
    /**
     * @var string
     */
    public $shareId;
    protected $_name = [
        'shareId' => 'ShareId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shareId) {
            $res['ShareId'] = $this->shareId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBimProjectShareModelListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShareId'])) {
            $model->shareId = $map['ShareId'];
        }

        return $model;
    }
}
