<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class TagAppRequest extends Model
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
        'appRevision' => 'AppRevision',
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
        if (null !== $this->appRevision) {
            $res['AppRevision'] = $this->appRevision;
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
     * @return TagAppRequest
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
        if (isset($map['RevisionTag'])) {
            $model->revisionTag = $map['RevisionTag'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
