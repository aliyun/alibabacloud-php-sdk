<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\PutCmsWorkspaceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'requestId' => 'RequestId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
