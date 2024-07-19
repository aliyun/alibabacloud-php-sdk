<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetSpecReviewTaskResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example 339
     *
     * @var string
     */
    public $id;

    /**
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $applyLimiter;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $applyQuota;

    /**
     * @var string
     */
    public $applyReason;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $effectiveLimiter;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $effectiveQuota;

    /**
     * @example 2024-05-30T06:28:07.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-05-30T06:28:07.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $oldLimiter;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $oldQuota;

    /**
     * @example USER
     *
     * @var string
     */
    public $source;

    /**
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @example QUOTA
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'               => 'Id',
        'appName'          => 'appName',
        'applyLimiter'     => 'applyLimiter',
        'applyQuota'       => 'applyQuota',
        'applyReason'      => 'applyReason',
        'effectiveLimiter' => 'effectiveLimiter',
        'effectiveQuota'   => 'effectiveQuota',
        'gmtCreate'        => 'gmtCreate',
        'gmtModified'      => 'gmtModified',
        'oldLimiter'       => 'oldLimiter',
        'oldQuota'         => 'oldQuota',
        'source'           => 'source',
        'status'           => 'status',
        'type'             => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->applyLimiter) {
            $res['applyLimiter'] = $this->applyLimiter;
        }
        if (null !== $this->applyQuota) {
            $res['applyQuota'] = $this->applyQuota;
        }
        if (null !== $this->applyReason) {
            $res['applyReason'] = $this->applyReason;
        }
        if (null !== $this->effectiveLimiter) {
            $res['effectiveLimiter'] = $this->effectiveLimiter;
        }
        if (null !== $this->effectiveQuota) {
            $res['effectiveQuota'] = $this->effectiveQuota;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->oldLimiter) {
            $res['oldLimiter'] = $this->oldLimiter;
        }
        if (null !== $this->oldQuota) {
            $res['oldQuota'] = $this->oldQuota;
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

    /**
     * @param array $map
     *
     * @return result
     */
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
            $model->applyLimiter = $map['applyLimiter'];
        }
        if (isset($map['applyQuota'])) {
            $model->applyQuota = $map['applyQuota'];
        }
        if (isset($map['applyReason'])) {
            $model->applyReason = $map['applyReason'];
        }
        if (isset($map['effectiveLimiter'])) {
            $model->effectiveLimiter = $map['effectiveLimiter'];
        }
        if (isset($map['effectiveQuota'])) {
            $model->effectiveQuota = $map['effectiveQuota'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['oldLimiter'])) {
            $model->oldLimiter = $map['oldLimiter'];
        }
        if (isset($map['oldQuota'])) {
            $model->oldQuota = $map['oldQuota'];
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
