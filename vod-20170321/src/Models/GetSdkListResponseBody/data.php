<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetSdkListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DataBusinessesValue;

class data extends Model
{
    /**
     * @var DataBusinessesValue[][]
     */
    public $businesses;
    protected $_name = [
        'businesses' => 'Businesses',
    ];

    public function validate()
    {
        if (\is_array($this->businesses)) {
            Model::validateArray($this->businesses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businesses) {
            if (\is_array($this->businesses)) {
                $res['Businesses'] = [];
                foreach ($this->businesses as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['Businesses'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['Businesses'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
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
        if (isset($map['Businesses'])) {
            if (!empty($map['Businesses'])) {
                $model->businesses = [];
                foreach ($map['Businesses'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->businesses[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->businesses[$key1][$n2] = DataBusinessesValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
