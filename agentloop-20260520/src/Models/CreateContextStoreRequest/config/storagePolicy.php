<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config;

use AlibabaCloud\Dara\Model;

class storagePolicy extends Model
{
    /**
     * @var string[]
     */
    public $allowedActions;

    /**
     * @var bool
     */
    public $dedupe;

    /**
     * @var bool
     */
    public $humanEditProtection;

    /**
     * @var string
     */
    public $mergeKey;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var float
     */
    public $similarityThreshold;

    /**
     * @var int
     */
    public $ttlDays;
    protected $_name = [
        'allowedActions' => 'allowedActions',
        'dedupe' => 'dedupe',
        'humanEditProtection' => 'humanEditProtection',
        'mergeKey' => 'mergeKey',
        'mode' => 'mode',
        'similarityThreshold' => 'similarityThreshold',
        'ttlDays' => 'ttlDays',
    ];

    public function validate()
    {
        if (\is_array($this->allowedActions)) {
            Model::validateArray($this->allowedActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedActions) {
            if (\is_array($this->allowedActions)) {
                $res['allowedActions'] = [];
                $n1 = 0;
                foreach ($this->allowedActions as $item1) {
                    $res['allowedActions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dedupe) {
            $res['dedupe'] = $this->dedupe;
        }

        if (null !== $this->humanEditProtection) {
            $res['humanEditProtection'] = $this->humanEditProtection;
        }

        if (null !== $this->mergeKey) {
            $res['mergeKey'] = $this->mergeKey;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->similarityThreshold) {
            $res['similarityThreshold'] = $this->similarityThreshold;
        }

        if (null !== $this->ttlDays) {
            $res['ttlDays'] = $this->ttlDays;
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
        if (isset($map['allowedActions'])) {
            if (!empty($map['allowedActions'])) {
                $model->allowedActions = [];
                $n1 = 0;
                foreach ($map['allowedActions'] as $item1) {
                    $model->allowedActions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dedupe'])) {
            $model->dedupe = $map['dedupe'];
        }

        if (isset($map['humanEditProtection'])) {
            $model->humanEditProtection = $map['humanEditProtection'];
        }

        if (isset($map['mergeKey'])) {
            $model->mergeKey = $map['mergeKey'];
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['similarityThreshold'])) {
            $model->similarityThreshold = $map['similarityThreshold'];
        }

        if (isset($map['ttlDays'])) {
            $model->ttlDays = $map['ttlDays'];
        }

        return $model;
    }
}
