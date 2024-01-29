<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\GetAppResponseBody;

use AlibabaCloud\Tea\Model;

class revisions extends Model
{
    /**
     * @example 2021-06-16T15:09:14.378297+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $revision;

    /**
     * @example Example revision comment
     *
     * @var string
     */
    public $revisionComment;

    /**
     * @example ProduceVersion
     *
     * @var string
     */
    public $revisionTag;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'revision'        => 'Revision',
        'revisionComment' => 'RevisionComment',
        'revisionTag'     => 'RevisionTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->revision) {
            $res['Revision'] = $this->revision;
        }
        if (null !== $this->revisionComment) {
            $res['RevisionComment'] = $this->revisionComment;
        }
        if (null !== $this->revisionTag) {
            $res['RevisionTag'] = $this->revisionTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return revisions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Revision'])) {
            $model->revision = $map['Revision'];
        }
        if (isset($map['RevisionComment'])) {
            $model->revisionComment = $map['RevisionComment'];
        }
        if (isset($map['RevisionTag'])) {
            $model->revisionTag = $map['RevisionTag'];
        }

        return $model;
    }
}
