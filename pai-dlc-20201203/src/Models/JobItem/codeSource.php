<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\JobItem;

use AlibabaCloud\Tea\Model;

class codeSource extends Model
{
    /**
     * @description 代码分支
     *
     * @var string
     */
    public $branch;

    /**
     * @description 代码源Id
     *
     * @var string
     */
    public $codeSourceId;

    /**
     * @description 代码Commit
     *
     * @var string
     */
    public $commit;

    /**
     * @description 本地挂载路径
     *
     * @var string
     */
    public $mountPath;
    protected $_name = [
        'branch'       => 'Branch',
        'codeSourceId' => 'CodeSourceId',
        'commit'       => 'Commit',
        'mountPath'    => 'MountPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['Branch'] = $this->branch;
        }
        if (null !== $this->codeSourceId) {
            $res['CodeSourceId'] = $this->codeSourceId;
        }
        if (null !== $this->commit) {
            $res['Commit'] = $this->commit;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return codeSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Branch'])) {
            $model->branch = $map['Branch'];
        }
        if (isset($map['CodeSourceId'])) {
            $model->codeSourceId = $map['CodeSourceId'];
        }
        if (isset($map['Commit'])) {
            $model->commit = $map['Commit'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        return $model;
    }
}
