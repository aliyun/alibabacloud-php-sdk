<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceResponseBody\workspace;

class GetWorkspaceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var workspace
     */
    public $workspace;
    protected $_name = [
        'requestId' => 'requestId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->workspace) {
            $this->workspace->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = null !== $this->workspace ? $this->workspace->toArray($noStream) : $this->workspace;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = workspace::fromMap($map['workspace']);
        }

        return $model;
    }
}
