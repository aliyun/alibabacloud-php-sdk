<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkspaceDocResponseBody extends Model
{
    /**
     * @example QoJGq7xxx
     *
     * @var string
     */
    public $docKey;

    /**
     * @example YRBGv0Ye
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://xxx/workspaceId/docs/nodeId
     *
     * @var string
     */
    public $url;

    /**
     * @example YRBGvy
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docKey'      => 'docKey',
        'nodeId'      => 'nodeId',
        'requestId'   => 'requestId',
        'url'         => 'url',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docKey) {
            $res['docKey'] = $this->docKey;
        }
        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkspaceDocResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docKey'])) {
            $model->docKey = $map['docKey'];
        }
        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
