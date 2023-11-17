<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class PopBatchQueryObjectProjectStatusRequest extends Model
{
    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $projectIds;
    protected $_name = [
        'jwtToken'   => 'JwtToken',
        'projectIds' => 'ProjectIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PopBatchQueryObjectProjectStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['ProjectIds'])) {
            $model->projectIds = $map['ProjectIds'];
        }

        return $model;
    }
}
