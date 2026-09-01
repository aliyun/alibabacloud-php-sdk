<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class edrSummary extends Model
{
    /**
     * @var string
     */
    public $boundCount;

    /**
     * @var string
     */
    public $hybridPaidAutoBind;

    /**
     * @var string
     */
    public $postPaidAutoBind;
    protected $_name = [
        'boundCount' => 'BoundCount',
        'hybridPaidAutoBind' => 'HybridPaidAutoBind',
        'postPaidAutoBind' => 'PostPaidAutoBind',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundCount) {
            $res['BoundCount'] = $this->boundCount;
        }

        if (null !== $this->hybridPaidAutoBind) {
            $res['HybridPaidAutoBind'] = $this->hybridPaidAutoBind;
        }

        if (null !== $this->postPaidAutoBind) {
            $res['PostPaidAutoBind'] = $this->postPaidAutoBind;
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
        if (isset($map['BoundCount'])) {
            $model->boundCount = $map['BoundCount'];
        }

        if (isset($map['HybridPaidAutoBind'])) {
            $model->hybridPaidAutoBind = $map['HybridPaidAutoBind'];
        }

        if (isset($map['PostPaidAutoBind'])) {
            $model->postPaidAutoBind = $map['PostPaidAutoBind'];
        }

        return $model;
    }
}
