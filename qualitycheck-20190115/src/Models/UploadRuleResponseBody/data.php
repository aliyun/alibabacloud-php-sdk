<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadRuleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $ridInfo;
    protected $_name = [
        'ridInfo' => 'RidInfo',
    ];

    public function validate()
    {
        if (\is_array($this->ridInfo)) {
            Model::validateArray($this->ridInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ridInfo) {
            if (\is_array($this->ridInfo)) {
                $res['RidInfo'] = [];
                $n1             = 0;
                foreach ($this->ridInfo as $item1) {
                    $res['RidInfo'][$n1++] = $item1;
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
        if (isset($map['RidInfo'])) {
            if (!empty($map['RidInfo'])) {
                $model->ridInfo = [];
                $n1             = 0;
                foreach ($map['RidInfo'] as $item1) {
                    $model->ridInfo[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
