<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\GetAppResponseBody;

use AlibabaCloud\Tea\Model;

class revisions extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 版本号
     *
     * @var string
     */
    public $revision;

    /**
     * @description 应用当前版本修改
     *
     * @var string
     */
    public $revisionComment;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'revision'        => 'Revision',
        'revisionComment' => 'RevisionComment',
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

        return $model;
    }
}
