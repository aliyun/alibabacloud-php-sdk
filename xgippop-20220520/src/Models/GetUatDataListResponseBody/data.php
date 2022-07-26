<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetUatDataListResponseBody;

use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetUatDataListResponseBody\data\dsList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dsList[]
     */
    public $dsList;

    /**
     * @var string
     */
    public $specType;
    protected $_name = [
        'dsList'   => 'DsList',
        'specType' => 'SpecType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dsList) {
            $res['DsList'] = [];
            if (null !== $this->dsList && \is_array($this->dsList)) {
                $n = 0;
                foreach ($this->dsList as $item) {
                    $res['DsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DsList'])) {
            if (!empty($map['DsList'])) {
                $model->dsList = [];
                $n             = 0;
                foreach ($map['DsList'] as $item) {
                    $model->dsList[$n++] = null !== $item ? dsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        return $model;
    }
}
