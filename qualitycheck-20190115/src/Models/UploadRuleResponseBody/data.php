<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadRuleResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ridInfo) {
            $res['RidInfo'] = $this->ridInfo;
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
        if (isset($map['RidInfo'])) {
            if (!empty($map['RidInfo'])) {
                $model->ridInfo = $map['RidInfo'];
            }
        }

        return $model;
    }
}
