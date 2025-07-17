<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo\failureComponents;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo\failureOperations;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo\successComponents;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo\successOperations;
use AlibabaCloud\Tea\Model;

class dryRunInfo extends Model
{
    /**
     * @description The error messages. If an error message is returned, the API fails to be imported.
     *
     * @var string[]
     */
    public $errorMessages;

    /**
     * @description The existing APIs. If an existing API is returned, the import updates the existing API.
     *
     * @var HttpApiApiInfo
     */
    public $existHttpApiInfo;

    /**
     * @description The data structs that fail the dry run.
     *
     * @var failureComponents[]
     */
    public $failureComponents;

    /**
     * @description The operations that fail the dry run.
     *
     * @var failureOperations[]
     */
    public $failureOperations;

    /**
     * @description The data structs that pass the dry run.
     *
     * @var successComponents[]
     */
    public $successComponents;

    /**
     * @description The operations that pass the dry run.
     *
     * @var successOperations[]
     */
    public $successOperations;

    /**
     * @description The alerts. If an alert is returned, specific operations or structs may fail to be imported.
     *
     * @var string[]
     */
    public $warningMessages;
    protected $_name = [
        'errorMessages' => 'errorMessages',
        'existHttpApiInfo' => 'existHttpApiInfo',
        'failureComponents' => 'failureComponents',
        'failureOperations' => 'failureOperations',
        'successComponents' => 'successComponents',
        'successOperations' => 'successOperations',
        'warningMessages' => 'warningMessages',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessages) {
            $res['errorMessages'] = $this->errorMessages;
        }
        if (null !== $this->existHttpApiInfo) {
            $res['existHttpApiInfo'] = null !== $this->existHttpApiInfo ? $this->existHttpApiInfo->toMap() : null;
        }
        if (null !== $this->failureComponents) {
            $res['failureComponents'] = [];
            if (null !== $this->failureComponents && \is_array($this->failureComponents)) {
                $n = 0;
                foreach ($this->failureComponents as $item) {
                    $res['failureComponents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failureOperations) {
            $res['failureOperations'] = [];
            if (null !== $this->failureOperations && \is_array($this->failureOperations)) {
                $n = 0;
                foreach ($this->failureOperations as $item) {
                    $res['failureOperations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->successComponents) {
            $res['successComponents'] = [];
            if (null !== $this->successComponents && \is_array($this->successComponents)) {
                $n = 0;
                foreach ($this->successComponents as $item) {
                    $res['successComponents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->successOperations) {
            $res['successOperations'] = [];
            if (null !== $this->successOperations && \is_array($this->successOperations)) {
                $n = 0;
                foreach ($this->successOperations as $item) {
                    $res['successOperations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->warningMessages) {
            $res['warningMessages'] = $this->warningMessages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dryRunInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorMessages'])) {
            if (!empty($map['errorMessages'])) {
                $model->errorMessages = $map['errorMessages'];
            }
        }
        if (isset($map['existHttpApiInfo'])) {
            $model->existHttpApiInfo = HttpApiApiInfo::fromMap($map['existHttpApiInfo']);
        }
        if (isset($map['failureComponents'])) {
            if (!empty($map['failureComponents'])) {
                $model->failureComponents = [];
                $n = 0;
                foreach ($map['failureComponents'] as $item) {
                    $model->failureComponents[$n++] = null !== $item ? failureComponents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['failureOperations'])) {
            if (!empty($map['failureOperations'])) {
                $model->failureOperations = [];
                $n = 0;
                foreach ($map['failureOperations'] as $item) {
                    $model->failureOperations[$n++] = null !== $item ? failureOperations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['successComponents'])) {
            if (!empty($map['successComponents'])) {
                $model->successComponents = [];
                $n = 0;
                foreach ($map['successComponents'] as $item) {
                    $model->successComponents[$n++] = null !== $item ? successComponents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['successOperations'])) {
            if (!empty($map['successOperations'])) {
                $model->successOperations = [];
                $n = 0;
                foreach ($map['successOperations'] as $item) {
                    $model->successOperations[$n++] = null !== $item ? successOperations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['warningMessages'])) {
            if (!empty($map['warningMessages'])) {
                $model->warningMessages = $map['warningMessages'];
            }
        }

        return $model;
    }
}
