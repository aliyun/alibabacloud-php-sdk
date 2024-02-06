<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PutBucketLifecycleRequest extends Model
{
    /**
     * @description Specifies whether to allow overlapped prefixes. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var string
     */
    public $allowSameActionOverlap;

    /**
     * @description The name of the bucket.
     *
     * @example test
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The expiration data. EOS executes a lifecycle rule for objects that were last updated before the expiration date.
     *
     * > ExpirationDays and CreateBeforeDate are mutually exclusive.
     * @example 2023-10-12T05:45:00Z
     *
     * @var string
     */
    public $createdBeforeDate;

    /**
     * @description The number of days from when the objects were last modified to when the lifecycle rule takes effect. The value must be a positive integer that is greater than 0.
     *
     * > ExpirationDays and CreateBeforeDate are mutually exclusive.
     * @example 5
     *
     * @var int
     */
    public $expirationDays;

    /**
     * @description The prefix of a rule. The prefix must be unique.
     *
     *   If you specify a prefix, the rule applies only to objects in the bucket that match the prefix.
     *   If you do not specify a prefix, the rule applies to all objects in the bucket.
     *
     * @example image
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The unique ID of the rule. The ID of a lifecycle rule can be up to 255 bytes in length.
     *
     *   You do not need to configure this parameter when you create a rule. The system automatically generates a unique ID.
     *   When you update a rule, you need to specify the rule ID, and the rule must exist. Otherwise, an error occurs.
     *
     * @example 1
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The status of the rule. Valid values:
     *
     *   **Enabled**: The rule is periodically executed.
     *   **Disabled**: The rule is ignored.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'allowSameActionOverlap' => 'AllowSameActionOverlap',
        'bucketName'             => 'BucketName',
        'createdBeforeDate'      => 'CreatedBeforeDate',
        'expirationDays'         => 'ExpirationDays',
        'prefix'                 => 'Prefix',
        'ruleId'                 => 'RuleId',
        'status'                 => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return PutBucketLifecycleRequest
     */
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
