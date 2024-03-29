<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class CreateAppResponseBody extends Model
{
    /**
     * @example TestApp
     *
     * @var string
     */
    public $appName;

    /**
     * @example easygene.cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $hostId;

    /**
     * @example DA980AD0-158F-44F3-847D-5EAB96C0EB6B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $revision;

    /**
     * @example ProduceVersion
     *
     * @var string
     */
    public $revisionTag;

    /**
     * @example TestWorkspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'     => 'AppName',
        'hostId'      => 'HostId',
        'requestId'   => 'RequestId',
        'revision'    => 'Revision',
        'revisionTag' => 'RevisionTag',
        'workspace'   => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->revision) {
            $res['Revision'] = $this->revision;
        }
        if (null !== $this->revisionTag) {
            $res['RevisionTag'] = $this->revisionTag;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Revision'])) {
            $model->revision = $map['Revision'];
        }
        if (isset($map['RevisionTag'])) {
            $model->revisionTag = $map['RevisionTag'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
