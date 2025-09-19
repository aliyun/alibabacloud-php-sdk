<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ResetLogShipperRequest;

use AlibabaCloud\Dara\Model;

class logMetaList extends Model
{
    /**
     * @var string
     */
    public $configLogStore;

    /**
     * @var int
     */
    public $hotTtl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'configLogStore' => 'ConfigLogStore',
        'hotTtl' => 'HotTtl',
        'status' => 'Status',
        'ttl' => 'Ttl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configLogStore) {
            $res['ConfigLogStore'] = $this->configLogStore;
        }

        if (null !== $this->hotTtl) {
            $res['HotTtl'] = $this->hotTtl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
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
        if (isset($map['ConfigLogStore'])) {
            $model->configLogStore = $map['ConfigLogStore'];
        }

        if (isset($map['HotTtl'])) {
            $model->hotTtl = $map['HotTtl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
