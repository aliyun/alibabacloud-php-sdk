<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponseBody\configs;

use AlibabaCloud\Tea\Model;

class greenManagerConfig extends Model
{
    /**
     * @var string
     */
    public $quota;

    /**
     * @var string
     */
    public $ratio;
    protected $_name = [
        'quota' => 'Quota',
        'ratio' => 'Ratio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
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
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }

        return $model;
    }
}
