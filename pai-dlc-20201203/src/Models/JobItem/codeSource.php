<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\JobItem;

use AlibabaCloud\Tea\Model;

class codeSource extends Model
{
    /**
     * @example master
     *
     * @var string
     */
    public $branch;

    /**
     * @example code-20210111103721-85qz78ia96lu
     *
     * @var string
     */
    public $codeSourceId;

    /**
     * @example 44da109b59f8596152987eaa8f3b2487bb72ea63
     *
     * @var string
     */
    public $commit;

    /**
     * @example /mnt/data
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
