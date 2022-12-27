<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnWafScenesRequest extends Model
{
    /**
     * @example waf_group,custom_acl,whitelist
     *
     * @var string
     */
    public $defenseScenes;
    protected $_name = [
        'defenseScenes' => 'DefenseScenes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScenes) {
            $res['DefenseScenes'] = $this->defenseScenes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafScenesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScenes'])) {
            $model->defenseScenes = $map['DefenseScenes'];
        }

        return $model;
    }
}
