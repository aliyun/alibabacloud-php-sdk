<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponseBody\configs;

use AlibabaCloud\Tea\Model;

class greenManagerConfig extends Model
{
    /**
     * @var string
     */
    public $ratio;

    /**
     * @var string
     */
    public $quota;
    protected $_name = [
        'ratio' => 'Ratio',
        'quota' => 'Quota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return greenManagerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        return $model;
    }
}
