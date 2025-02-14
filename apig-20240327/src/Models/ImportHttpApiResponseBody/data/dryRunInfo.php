<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiApiInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo\failureComponents;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo\failureOperations;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo\successComponents;
use AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo\successOperations;

class dryRunInfo extends Model
{
    /**
     * @var string[]
     */
    public $errorMessages;
    /**
     * @var HttpApiApiInfo
     */
    public $existHttpApiInfo;
    /**
     * @var failureComponents[]
     */
    public $failureComponents;
    /**
     * @var failureOperations[]
     */
    public $failureOperations;
    /**
     * @var successComponents[]
     */
    public $successComponents;
    /**
     * @var successOperations[]
     */
    public $successOperations;
    /**
     * @var string[]
     */
    public $warningMessages;
    protected $_name = [
        'errorMessages'     => 'errorMessages',
        'existHttpApiInfo'  => 'existHttpApiInfo',
        'failureComponents' => 'failureComponents',
        'failureOperations' => 'failureOperations',
        'successComponents' => 'successComponents',
        'successOperations' => 'successOperations',
        'warningMessages'   => 'warningMessages',
    ];

    public function validate()
    {
        if (\is_array($this->errorMessages)) {
            Model::validateArray($this->errorMessages);
        }
        if (null !== $this->existHttpApiInfo) {
            $this->existHttpApiInfo->validate();
        }
        if (\is_array($this->failureComponents)) {
            Model::validateArray($this->failureComponents);
        }
        if (\is_array($this->failureOperations)) {
            Model::validateArray($this->failureOperations);
        }
        if (\is_array($this->successComponents)) {
            Model::validateArray($this->successComponents);
        }
        if (\is_array($this->successOperations)) {
            Model::validateArray($this->successOperations);
        }
        if (\is_array($this->warningMessages)) {
            Model::validateArray($this->warningMessages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessages) {
            if (\is_array($this->errorMessages)) {
                $res['errorMessages'] = [];
                $n1                   = 0;
                foreach ($this->errorMessages as $item1) {
                    $res['errorMessages'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->existHttpApiInfo) {
            $res['existHttpApiInfo'] = null !== $this->existHttpApiInfo ? $this->existHttpApiInfo->toArray($noStream) : $this->existHttpApiInfo;
        }

        if (null !== $this->failureComponents) {
            if (\is_array($this->failureComponents)) {
                $res['failureComponents'] = [];
                $n1                       = 0;
                foreach ($this->failureComponents as $item1) {
                    $res['failureComponents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->failureOperations) {
            if (\is_array($this->failureOperations)) {
                $res['failureOperations'] = [];
                $n1                       = 0;
                foreach ($this->failureOperations as $item1) {
                    $res['failureOperations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->successComponents) {
            if (\is_array($this->successComponents)) {
                $res['successComponents'] = [];
                $n1                       = 0;
                foreach ($this->successComponents as $item1) {
                    $res['successComponents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->successOperations) {
            if (\is_array($this->successOperations)) {
                $res['successOperations'] = [];
                $n1                       = 0;
                foreach ($this->successOperations as $item1) {
                    $res['successOperations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->warningMessages) {
            if (\is_array($this->warningMessages)) {
                $res['warningMessages'] = [];
                $n1                     = 0;
                foreach ($this->warningMessages as $item1) {
                    $res['warningMessages'][$n1++] = $item1;
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
        if (isset($map['errorMessages'])) {
            if (!empty($map['errorMessages'])) {
                $model->errorMessages = [];
                $n1                   = 0;
                foreach ($map['errorMessages'] as $item1) {
                    $model->errorMessages[$n1++] = $item1;
                }
            }
        }

        if (isset($map['existHttpApiInfo'])) {
            $model->existHttpApiInfo = HttpApiApiInfo::fromMap($map['existHttpApiInfo']);
        }

        if (isset($map['failureComponents'])) {
            if (!empty($map['failureComponents'])) {
                $model->failureComponents = [];
                $n1                       = 0;
                foreach ($map['failureComponents'] as $item1) {
                    $model->failureComponents[$n1++] = failureComponents::fromMap($item1);
                }
            }
        }

        if (isset($map['failureOperations'])) {
            if (!empty($map['failureOperations'])) {
                $model->failureOperations = [];
                $n1                       = 0;
                foreach ($map['failureOperations'] as $item1) {
                    $model->failureOperations[$n1++] = failureOperations::fromMap($item1);
                }
            }
        }

        if (isset($map['successComponents'])) {
            if (!empty($map['successComponents'])) {
                $model->successComponents = [];
                $n1                       = 0;
                foreach ($map['successComponents'] as $item1) {
                    $model->successComponents[$n1++] = successComponents::fromMap($item1);
                }
            }
        }

        if (isset($map['successOperations'])) {
            if (!empty($map['successOperations'])) {
                $model->successOperations = [];
                $n1                       = 0;
                foreach ($map['successOperations'] as $item1) {
                    $model->successOperations[$n1++] = successOperations::fromMap($item1);
                }
            }
        }

        if (isset($map['warningMessages'])) {
            if (!empty($map['warningMessages'])) {
                $model->warningMessages = [];
                $n1                     = 0;
                foreach ($map['warningMessages'] as $item1) {
                    $model->warningMessages[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
