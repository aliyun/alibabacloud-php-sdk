<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetSpecReviewTaskResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var mixed[]
     */
    public $applyLimiter;

    /**
     * @var mixed[]
     */
    public $applyQuota;

    /**
     * @var string
     */
    public $applyReason;

    /**
     * @var mixed[]
     */
    public $effectiveLimiter;

    /**
     * @var mixed[]
     */
    public $effectiveQuota;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var mixed[]
     */
    public $oldLimiter;

    /**
     * @var mixed[]
     */
    public $oldQuota;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'id' => 'Id',
        'appName' => 'appName',
        'applyLimiter' => 'applyLimiter',
        'applyQuota' => 'applyQuota',
        'applyReason' => 'applyReason',
        'effectiveLimiter' => 'effectiveLimiter',
        'effectiveQuota' => 'effectiveQuota',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'oldLimiter' => 'oldLimiter',
        'oldQuota' => 'oldQuota',
        'source' => 'source',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->applyLimiter)) {
            Model::validateArray($this->applyLimiter);
        }
        if (\is_array($this->applyQuota)) {
            Model::validateArray($this->applyQuota);
        }
        if (\is_array($this->effectiveLimiter)) {
            Model::validateArray($this->effectiveLimiter);
        }
        if (\is_array($this->effectiveQuota)) {
            Model::validateArray($this->effectiveQuota);
        }
        if (\is_array($this->oldLimiter)) {
            Model::validateArray($this->oldLimiter);
        }
        if (\is_array($this->oldQuota)) {
            Model::validateArray($this->oldQuota);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }

        if (null !== $this->applyLimiter) {
            if (\is_array($this->applyLimiter)) {
                $res['applyLimiter'] = [];
                foreach ($this->applyLimiter as $key1 => $value1) {
                    $res['applyLimiter'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->applyQuota) {
            if (\is_array($this->applyQuota)) {
                $res['applyQuota'] = [];
                foreach ($this->applyQuota as $key1 => $value1) {
                    $res['applyQuota'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->applyReason) {
            $res['applyReason'] = $this->applyReason;
        }

        if (null !== $this->effectiveLimiter) {
            if (\is_array($this->effectiveLimiter)) {
                $res['effectiveLimiter'] = [];
                foreach ($this->effectiveLimiter as $key1 => $value1) {
                    $res['effectiveLimiter'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->effectiveQuota) {
            if (\is_array($this->effectiveQuota)) {
                $res['effectiveQuota'] = [];
                foreach ($this->effectiveQuota as $key1 => $value1) {
                    $res['effectiveQuota'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->oldLimiter) {
            if (\is_array($this->oldLimiter)) {
                $res['oldLimiter'] = [];
                foreach ($this->oldLimiter as $key1 => $value1) {
                    $res['oldLimiter'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->oldQuota) {
            if (\is_array($this->oldQuota)) {
                $res['oldQuota'] = [];
                foreach ($this->oldQuota as $key1 => $value1) {
                    $res['oldQuota'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }

        if (isset($map['applyLimiter'])) {
            if (!empty($map['applyLimiter'])) {
                $model->applyLimiter = [];
                foreach ($map['applyLimiter'] as $key1 => $value1) {
                    $model->applyLimiter[$key1] = $value1;
                }
            }
        }

        if (isset($map['applyQuota'])) {
            if (!empty($map['applyQuota'])) {
                $model->applyQuota = [];
                foreach ($map['applyQuota'] as $key1 => $value1) {
                    $model->applyQuota[$key1] = $value1;
                }
            }
        }

        if (isset($map['applyReason'])) {
            $model->applyReason = $map['applyReason'];
        }

        if (isset($map['effectiveLimiter'])) {
            if (!empty($map['effectiveLimiter'])) {
                $model->effectiveLimiter = [];
                foreach ($map['effectiveLimiter'] as $key1 => $value1) {
                    $model->effectiveLimiter[$key1] = $value1;
                }
            }
        }

        if (isset($map['effectiveQuota'])) {
            if (!empty($map['effectiveQuota'])) {
                $model->effectiveQuota = [];
                foreach ($map['effectiveQuota'] as $key1 => $value1) {
                    $model->effectiveQuota[$key1] = $value1;
                }
            }
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['oldLimiter'])) {
            if (!empty($map['oldLimiter'])) {
                $model->oldLimiter = [];
                foreach ($map['oldLimiter'] as $key1 => $value1) {
                    $model->oldLimiter[$key1] = $value1;
                }
            }
        }

        if (isset($map['oldQuota'])) {
            if (!empty($map['oldQuota'])) {
                $model->oldQuota = [];
                foreach ($map['oldQuota'] as $key1 => $value1) {
                    $model->oldQuota[$key1] = $value1;
                }
            }
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
