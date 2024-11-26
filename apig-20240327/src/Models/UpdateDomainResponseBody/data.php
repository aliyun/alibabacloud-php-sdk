<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Deploy revision id.
     *
     * @example apr-xxx
     *
     * @var string
     */
    public $deployRevisionId;
    protected $_name = [
        'deployRevisionId' => 'deployRevisionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployRevisionId) {
            $res['deployRevisionId'] = $this->deployRevisionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deployRevisionId'])) {
            $model->deployRevisionId = $map['deployRevisionId'];
        }

        return $model;
    }
}
