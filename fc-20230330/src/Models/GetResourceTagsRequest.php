<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTagsRequest extends Model
{
    /**
     * @example acs:fc:cn-shanghai:1234/functions/my-func
     *
     * @var string
     */
    public $arn;
    protected $_name = [
        'arn' => 'arn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['arn'] = $this->arn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arn'])) {
            $model->arn = $map['arn'];
        }

        return $model;
    }
}
