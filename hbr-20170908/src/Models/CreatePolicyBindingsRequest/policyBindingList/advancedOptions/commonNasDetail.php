<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions;

use AlibabaCloud\Dara\Model;

class commonNasDetail extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $fetchSliceSize;
    /**
     * @var bool
     */
    public $fullOnIncrementFail;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'fetchSliceSize'      => 'FetchSliceSize',
        'fullOnIncrementFail' => 'FullOnIncrementFail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->fetchSliceSize) {
            $res['FetchSliceSize'] = $this->fetchSliceSize;
        }

        if (null !== $this->fullOnIncrementFail) {
            $res['FullOnIncrementFail'] = $this->fullOnIncrementFail;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['FetchSliceSize'])) {
            $model->fetchSliceSize = $map['FetchSliceSize'];
        }

        if (isset($map['FullOnIncrementFail'])) {
            $model->fullOnIncrementFail = $map['FullOnIncrementFail'];
        }

        return $model;
    }
}
