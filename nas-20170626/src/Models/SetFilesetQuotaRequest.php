<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class SetFilesetQuotaRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var int
     */
    public $fileCountLimit;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $fsetId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
