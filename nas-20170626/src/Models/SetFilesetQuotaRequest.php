<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class SetFilesetQuotaRequest extends Model
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
     * @example 10000
     *
     * @var int
     */
    public $fileCountLimit;

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

    /**
     * @example 10737418240
     *
     * @var int
     */
    public $sizeLimit;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'dryRun'         => 'DryRun',
        'fileCountLimit' => 'FileCountLimit',
        'fileSystemId'   => 'FileSystemId',
        'fsetId'         => 'FsetId',
        'sizeLimit'      => 'SizeLimit',
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
        if (null !== $this->fileCountLimit) {
            $res['FileCountLimit'] = $this->fileCountLimit;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fsetId) {
            $res['FsetId'] = $this->fsetId;
        }
        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetFilesetQuotaRequest
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
        if (isset($map['FileCountLimit'])) {
            $model->fileCountLimit = $map['FileCountLimit'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FsetId'])) {
            $model->fsetId = $map['FsetId'];
        }
        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }

        return $model;
    }
}
