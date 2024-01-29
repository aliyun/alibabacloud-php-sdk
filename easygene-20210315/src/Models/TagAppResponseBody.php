<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class TagAppResponseBody extends Model
{
    /**
     * @example TestApp
     *
     * @var string
     */
    public $appName;

    /**
     * @example 1
     *
     * @var string
     */
    public $appRevision;

    /**
     * @example 0
     *
     * @var string
     */
    public $formerRevision;

    /**
     * @example TestTag
     *
     * @var string
     */
    public $formerTag;

    /**
     * @example DA980AD0-158F-44F3-847D-5EAB96C0EB6B
     *
     * @var string
     */
    public $requestId;

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
        'appName'        => 'AppName',
        'appRevision'    => 'AppRevision',
        'formerRevision' => 'FormerRevision',
        'formerTag'      => 'FormerTag',
        'requestId'      => 'RequestId',
        'revisionTag'    => 'RevisionTag',
        'workspace'      => 'Workspace',
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
        if (null !== $this->appRevision) {
            $res['AppRevision'] = $this->appRevision;
        }
        if (null !== $this->formerRevision) {
            $res['FormerRevision'] = $this->formerRevision;
        }
        if (null !== $this->formerTag) {
            $res['FormerTag'] = $this->formerTag;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return TagAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppRevision'])) {
            $model->appRevision = $map['AppRevision'];
        }
        if (isset($map['FormerRevision'])) {
            $model->formerRevision = $map['FormerRevision'];
        }
        if (isset($map['FormerTag'])) {
            $model->formerTag = $map['FormerTag'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
