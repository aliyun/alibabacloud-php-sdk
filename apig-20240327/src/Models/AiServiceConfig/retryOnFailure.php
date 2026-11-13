<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig;

use AlibabaCloud\Dara\Model;

class retryOnFailure extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $maxRetries;

    /**
     * @var string[]
     */
    public $retryOnStatus;

    /**
     * @var int
     */
    public $retryTimeout;
    protected $_name = [
        'enabled' => 'enabled',
        'maxRetries' => 'maxRetries',
        'retryOnStatus' => 'retryOnStatus',
        'retryTimeout' => 'retryTimeout',
    ];

    public function validate()
    {
        if (\is_array($this->retryOnStatus)) {
            Model::validateArray($this->retryOnStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->maxRetries) {
            $res['maxRetries'] = $this->maxRetries;
        }

        if (null !== $this->retryOnStatus) {
            if (\is_array($this->retryOnStatus)) {
                $res['retryOnStatus'] = [];
                $n1 = 0;
                foreach ($this->retryOnStatus as $item1) {
                    $res['retryOnStatus'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->retryTimeout) {
            $res['retryTimeout'] = $this->retryTimeout;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['maxRetries'])) {
            $model->maxRetries = $map['maxRetries'];
        }

        if (isset($map['retryOnStatus'])) {
            if (!empty($map['retryOnStatus'])) {
                $model->retryOnStatus = [];
                $n1 = 0;
                foreach ($map['retryOnStatus'] as $item1) {
                    $model->retryOnStatus[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['retryTimeout'])) {
            $model->retryTimeout = $map['retryTimeout'];
        }

        return $model;
    }
}
