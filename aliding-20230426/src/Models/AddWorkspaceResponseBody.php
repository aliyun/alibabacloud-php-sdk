<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceResponseBody\workspace;
use AlibabaCloud\Tea\Model;

class AddWorkspaceResponseBody extends Model
{
    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = null !== $this->workspace ? $this->workspace->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddWorkspaceResponseBody
     */
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
