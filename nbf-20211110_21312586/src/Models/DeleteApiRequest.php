<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBF\V20211110_21312586\Models;

use AlibabaCloud\Tea\Model;

class DeleteApiRequest extends Model
{
    /**
     * @var string
     */
    public $apiExternalId;
    protected $_name = [
        'apiExternalId' => 'apiExternalId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiExternalId) {
            $res['apiExternalId'] = $this->apiExternalId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiExternalId'])) {
            $model->apiExternalId = $map['apiExternalId'];
        }

        return $model;
    }
}
