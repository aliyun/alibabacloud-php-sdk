<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CancelFilesetQuotaRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @example bmcpfs-290w65p03ok64ya****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description Fileset ID。
     *
     * This parameter is required.
     * @example fset-1902718ea0ae****
     *
     * @var string
     */
    public $fsetId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'dryRun'       => 'DryRun',
        'fileSystemId' => 'FileSystemId',
        'fsetId'       => 'FsetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fsetId) {
            $res['FsetId'] = $this->fsetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelFilesetQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FsetId'])) {
            $model->fsetId = $map['FsetId'];
        }

        return $model;
    }
}
