<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets;

use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense\cleanTh;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense\djPolicy;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense\holeTh;
use AlibabaCloud\Tea\Model;

class DDoSDefense extends Model
{
    /**
     * @var cleanTh
     */
    public $cleanTh;

    /**
     * @var djPolicy
     */
    public $djPolicy;

    /**
     * @var holeTh
     */
    public $holeTh;
    protected $_name = [
        'cleanTh'  => 'CleanTh',
        'djPolicy' => 'DjPolicy',
        'holeTh'   => 'HoleTh',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cleanTh) {
            $res['CleanTh'] = null !== $this->cleanTh ? $this->cleanTh->toMap() : null;
        }
        if (null !== $this->djPolicy) {
            $res['DjPolicy'] = null !== $this->djPolicy ? $this->djPolicy->toMap() : null;
        }
        if (null !== $this->holeTh) {
            $res['HoleTh'] = null !== $this->holeTh ? $this->holeTh->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DDoSDefense
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CleanTh'])) {
            $model->cleanTh = cleanTh::fromMap($map['CleanTh']);
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
