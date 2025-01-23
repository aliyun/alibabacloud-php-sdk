<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;

use AlibabaCloud\Dara\Model;

class commonFileSystemDetail extends Model
{
    /**
     * @var int
     */
    public $fetchSliceSize;
    /**
     * @var bool
     */
    public $fullOnIncrementFail;
    protected $_name = [
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
        if (isset($map['FetchSliceSize'])) {
            $model->fetchSliceSize = $map['FetchSliceSize'];
        }

        if (isset($map['FullOnIncrementFail'])) {
            $model->fullOnIncrementFail = $map['FullOnIncrementFail'];
        }

        return $model;
    }
}
