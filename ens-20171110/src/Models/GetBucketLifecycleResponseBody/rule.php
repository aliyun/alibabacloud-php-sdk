<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketLifecycleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketLifecycleResponseBody\rule\expiration;

class rule extends Model
{
    /**
     * @var expiration
     */
    public $expiration;

    /**
     * @var string
     */
    public $ID;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'expiration' => 'Expiration',
        'ID' => 'ID',
        'prefix' => 'Prefix',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->expiration) {
            $this->expiration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiration) {
            $res['Expiration'] = null !== $this->expiration ? $this->expiration->toArray($noStream) : $this->expiration;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
