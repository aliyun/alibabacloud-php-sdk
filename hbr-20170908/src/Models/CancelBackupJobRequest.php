<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CancelBackupJobRequest extends Model
{
    /**
     * @description The ID of the backup job.
     *
     * @example j-******************************
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-*****************************
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'jobId'   => 'JobId',
        'vaultId' => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelBackupJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
