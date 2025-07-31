<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data\customServiceConf\rules;

use AlibabaCloud\Tea\Model;

class imageScanRule extends Model
{
    /**
     * @var string[]
     */
    public $services;
    protected $_name = [
        'services' => 'Services',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->services) {
            $res['Services'] = $this->services;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageScanRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = $map['Services'];
            }
        }

        return $model;
    }
}
