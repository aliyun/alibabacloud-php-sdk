<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketLifecycleResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketLifecycleResponseBody\rule\expiration;
use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description The expiration time.
     *
     * @var expiration
     */
    public $expiration;

    /**
     * @description The unique ID of the rule.
     *
     * @example 1
     *
     * @var string
     */
    public $ID;

    /**
     * @description The prefix that is applied to the rule.
     *
     * @example image
     *
     * @var string
     */
    public $prefix;

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
        'expiration' => 'Expiration',
        'ID'         => 'ID',
        'prefix'     => 'Prefix',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiration) {
            $res['Expiration'] = null !== $this->expiration ? $this->expiration->toMap() : null;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expiration'])) {
            $model->expiration = expiration::fromMap($map['Expiration']);
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
