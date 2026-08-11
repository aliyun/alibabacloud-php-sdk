<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponseBody\data\result\dryRunResults;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponseBody\data\result\failureItems;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponseBody\data\result\importRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetBatchImportTaskResponseBody\data\result\successItems;

class result extends Model
{
    /**
     * @var string
     */
    public $apiType;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var dryRunResults[]
     */
    public $dryRunResults;

    /**
     * @var failureItems[]
     */
    public $failureItems;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var importRequest
     */
    public $importRequest;

    /**
     * @var successItems[]
     */
    public $successItems;
    protected $_name = [
        'apiType' => 'apiType',
        'dryRun' => 'dryRun',
        'dryRunResults' => 'dryRunResults',
        'failureItems' => 'failureItems',
        'gatewayId' => 'gatewayId',
        'importRequest' => 'importRequest',
        'successItems' => 'successItems',
    ];

    public function validate()
    {
        if (\is_array($this->dryRunResults)) {
            Model::validateArray($this->dryRunResults);
        }
        if (\is_array($this->failureItems)) {
            Model::validateArray($this->failureItems);
        }
        if (null !== $this->importRequest) {
            $this->importRequest->validate();
        }
        if (\is_array($this->successItems)) {
            Model::validateArray($this->successItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiType) {
            $res['apiType'] = $this->apiType;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->dryRunResults) {
            if (\is_array($this->dryRunResults)) {
                $res['dryRunResults'] = [];
                $n1 = 0;
                foreach ($this->dryRunResults as $item1) {
                    $res['dryRunResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->failureItems) {
            if (\is_array($this->failureItems)) {
                $res['failureItems'] = [];
                $n1 = 0;
                foreach ($this->failureItems as $item1) {
                    $res['failureItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->importRequest) {
            $res['importRequest'] = null !== $this->importRequest ? $this->importRequest->toArray($noStream) : $this->importRequest;
        }

        if (null !== $this->successItems) {
            if (\is_array($this->successItems)) {
                $res['successItems'] = [];
                $n1 = 0;
                foreach ($this->successItems as $item1) {
                    $res['successItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['apiType'])) {
            $model->apiType = $map['apiType'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['dryRunResults'])) {
            if (!empty($map['dryRunResults'])) {
                $model->dryRunResults = [];
                $n1 = 0;
                foreach ($map['dryRunResults'] as $item1) {
                    $model->dryRunResults[$n1] = dryRunResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['failureItems'])) {
            if (!empty($map['failureItems'])) {
                $model->failureItems = [];
                $n1 = 0;
                foreach ($map['failureItems'] as $item1) {
                    $model->failureItems[$n1] = failureItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['importRequest'])) {
            $model->importRequest = importRequest::fromMap($map['importRequest']);
        }

        if (isset($map['successItems'])) {
            if (!empty($map['successItems'])) {
                $model->successItems = [];
                $n1 = 0;
                foreach ($map['successItems'] as $item1) {
                    $model->successItems[$n1] = successItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
