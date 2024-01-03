<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\TemplateView\fields;

use AlibabaCloud\Tea\Model;

class visitInfo extends Model
{
    /**
     * @var mixed[]
     */
    public $aftsConf;

    /**
     * @var mixed[]
     */
    public $ossConf;
    protected $_name = [
        'aftsConf' => 'AftsConf',
        'ossConf'  => 'OssConf',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aftsConf) {
            $res['AftsConf'] = $this->aftsConf;
        }
        if (null !== $this->ossConf) {
            $res['OssConf'] = $this->ossConf;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return visitInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AftsConf'])) {
            $model->aftsConf = $map['AftsConf'];
        }
        if (isset($map['OssConf'])) {
            $model->ossConf = $map['OssConf'];
        }

        return $model;
    }
}
