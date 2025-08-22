<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\JobItem;

use AlibabaCloud\Dara\Model;

class codeSource extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $codeSourceId;

    /**
     * @var string
     */
    public $commit;

    /**
     * @var string
     */
    public $mountPath;
    protected $_name = [
        'branch' => 'Branch',
        'codeSourceId' => 'CodeSourceId',
        'commit' => 'Commit',
        'mountPath' => 'MountPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
