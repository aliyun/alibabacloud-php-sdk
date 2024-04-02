<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate\voiceConfig\antispam;
use AlibabaCloud\Tea\Model;

class voiceConfig extends Model
{
    /**
     * @var antispam
     */
    public $antispam;
    protected $_name = [
        'antispam' => 'Antispam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antispam) {
            $res['Antispam'] = null !== $this->antispam ? $this->antispam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return voiceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Antispam'])) {
            $model->antispam = antispam::fromMap($map['Antispam']);
        }

        return $model;
    }
}
