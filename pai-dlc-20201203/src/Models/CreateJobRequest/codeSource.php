<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest;

use AlibabaCloud\Tea\Model;

class codeSource extends Model
{
    /**
     * @description The branch of the referenced code repository. By default, the branch configured in the code source is used. This parameter is optional.
     *
     * @example master
     *
     * @var string
     */
    public $branch;

    /**
     * @description The ID of the code source.
     *
     * @example code-20210111103721-xxxxxxx
     *
     * @var string
     */
    public $codeSourceId;

    /**
     * @description The commit ID of the code to be downloaded. By default, the commit ID configured in the code source is used. This parameter is optional.
     *
     * @example 44da109b5******
     *
     * @var string
     */
    public $commit;

    /**
     * @description The path to which the job is mounted. By default, the mount path configured in the data source is used. This parameter is optional.
     *
     * @example /root/data
     *
     * @var string
     */
    public $mountPath;
    protected $_name = [
        'branch' => 'Branch',
        'codeSourceId' => 'CodeSourceId',
        'commit' => 'Commit',
        'mountPath' => 'MountPath',
    ];

    public function validate() {}

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
