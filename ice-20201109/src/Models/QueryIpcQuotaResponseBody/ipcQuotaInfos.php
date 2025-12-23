<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryIpcQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class ipcQuotaInfos extends Model
{
    /**
     * @var string
     */
    public $capability;

    /**
     * @var int
     */
    public $consumedQuota;

    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var int
     */
    public $maxQuota;
    protected $_name = [
        'capability' => 'Capability',
        'consumedQuota' => 'ConsumedQuota',
        'dateTime' => 'DateTime',
        'maxQuota' => 'MaxQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capability) {
            $res['Capability'] = $this->capability;
        }

        if (null !== $this->consumedQuota) {
            $res['ConsumedQuota'] = $this->consumedQuota;
        }

        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }

        if (null !== $this->maxQuota) {
            $res['MaxQuota'] = $this->maxQuota;
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
        if (isset($map['Capability'])) {
            $model->capability = $map['Capability'];
        }

        if (isset($map['ConsumedQuota'])) {
            $model->consumedQuota = $map['ConsumedQuota'];
        }

        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        if (isset($map['MaxQuota'])) {
            $model->maxQuota = $map['MaxQuota'];
        }

        return $model;
    }
}
