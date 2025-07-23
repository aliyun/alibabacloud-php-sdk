<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class GetEntityStoreResponseBody extends Model
{
    /**
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 264C3E89-XXXX-XXXX-XXXX-CE9C2196C7DC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example workspace-test-001
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'regionId' => 'regionId',
        'requestId' => 'requestId',
        'workspaceName' => 'workspaceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->workspaceName) {
            $res['workspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEntityStoreResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['workspaceName'])) {
            $model->workspaceName = $map['workspaceName'];
        }

        return $model;
    }
}
