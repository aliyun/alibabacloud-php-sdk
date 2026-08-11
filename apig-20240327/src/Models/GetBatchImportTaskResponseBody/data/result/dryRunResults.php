<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponseBody\data\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponseBody\data\result\dryRunResults\dryRunInfo;

class dryRunResults extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var dryRunInfo
     */
    public $dryRunInfo;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'apiName' => 'apiName',
        'dryRunInfo' => 'dryRunInfo',
        'error' => 'error',
        'fileName' => 'fileName',
    ];

    public function validate()
    {
        if (null !== $this->dryRunInfo) {
            $this->dryRunInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
        }

        if (null !== $this->dryRunInfo) {
            $res['dryRunInfo'] = null !== $this->dryRunInfo ? $this->dryRunInfo->toArray($noStream) : $this->dryRunInfo;
        }

        if (null !== $this->error) {
            $res['error'] = $this->error;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
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
        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }

        if (isset($map['dryRunInfo'])) {
            $model->dryRunInfo = dryRunInfo::fromMap($map['dryRunInfo']);
        }

        if (isset($map['error'])) {
            $model->error = $map['error'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        return $model;
    }
}
