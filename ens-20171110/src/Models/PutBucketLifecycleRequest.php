<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class PutBucketLifecycleRequest extends Model
{
    /**
     * @var string
     */
    public $allowSameActionOverlap;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $createdBeforeDate;

    /**
     * @var int
     */
    public $expirationDays;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'allowSameActionOverlap' => 'AllowSameActionOverlap',
        'bucketName' => 'BucketName',
        'createdBeforeDate' => 'CreatedBeforeDate',
        'expirationDays' => 'ExpirationDays',
        'prefix' => 'Prefix',
        'ruleId' => 'RuleId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowSameActionOverlap) {
            $res['AllowSameActionOverlap'] = $this->allowSameActionOverlap;
        }

        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->createdBeforeDate) {
            $res['CreatedBeforeDate'] = $this->createdBeforeDate;
        }

        if (null !== $this->expirationDays) {
            $res['ExpirationDays'] = $this->expirationDays;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AllowSameActionOverlap'])) {
            $model->allowSameActionOverlap = $map['AllowSameActionOverlap'];
        }

        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['CreatedBeforeDate'])) {
            $model->createdBeforeDate = $map['CreatedBeforeDate'];
        }

        if (isset($map['ExpirationDays'])) {
            $model->expirationDays = $map['ExpirationDays'];
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
