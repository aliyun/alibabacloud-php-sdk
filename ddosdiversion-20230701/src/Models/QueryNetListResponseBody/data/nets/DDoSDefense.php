<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense\cleanTh;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense\customNetPolicy;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense\djPolicy;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense\holeTh;

class DDoSDefense extends Model
{
    /**
     * @var cleanTh
     */
    public $cleanTh;

    /**
     * @var customNetPolicy
     */
    public $customNetPolicy;

    /**
     * @var djPolicy
     */
    public $djPolicy;

    /**
     * @var holeTh
     */
    public $holeTh;
    protected $_name = [
        'cleanTh' => 'CleanTh',
        'customNetPolicy' => 'CustomNetPolicy',
        'djPolicy' => 'DjPolicy',
        'holeTh' => 'HoleTh',
    ];

    public function validate()
    {
        if (null !== $this->cleanTh) {
            $this->cleanTh->validate();
        }
        if (null !== $this->customNetPolicy) {
            $this->customNetPolicy->validate();
        }
        if (null !== $this->djPolicy) {
            $this->djPolicy->validate();
        }
        if (null !== $this->holeTh) {
            $this->holeTh->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cleanTh) {
            $res['CleanTh'] = null !== $this->cleanTh ? $this->cleanTh->toArray($noStream) : $this->cleanTh;
        }

        if (null !== $this->customNetPolicy) {
            $res['CustomNetPolicy'] = null !== $this->customNetPolicy ? $this->customNetPolicy->toArray($noStream) : $this->customNetPolicy;
        }

        if (null !== $this->djPolicy) {
            $res['DjPolicy'] = null !== $this->djPolicy ? $this->djPolicy->toArray($noStream) : $this->djPolicy;
        }

        if (null !== $this->holeTh) {
            $res['HoleTh'] = null !== $this->holeTh ? $this->holeTh->toArray($noStream) : $this->holeTh;
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
        if (isset($map['CleanTh'])) {
            $model->cleanTh = cleanTh::fromMap($map['CleanTh']);
        }

        if (isset($map['CustomNetPolicy'])) {
            $model->customNetPolicy = customNetPolicy::fromMap($map['CustomNetPolicy']);
        }

        if (isset($map['DjPolicy'])) {
            $model->djPolicy = djPolicy::fromMap($map['DjPolicy']);
        }

        if (isset($map['HoleTh'])) {
            $model->holeTh = holeTh::fromMap($map['HoleTh']);
        }

        return $model;
    }
}
