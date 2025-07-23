<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class CreateEntityStoreResponseBody extends Model
{
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
        'requestId' => 'requestId',
        'workspaceName' => 'workspaceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return CreateEntityStoreResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['workspaceName'])) {
            $model->workspaceName = $map['workspaceName'];
        }

        return $model;
    }
}
