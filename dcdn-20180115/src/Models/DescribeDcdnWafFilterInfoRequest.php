<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnWafFilterInfoRequest extends Model
{
    /**
     * @description The type of the protection policy. Separate multiple types with commas (,). Valid values:
     *
     *   waf_group: basic web protection
     *   custom_acl: custom
     *   whitelist: whitelist
     *
     * >  If you do not specify this parameter, all types are returned.
     * @example custom_acl
     *
     * @var string
     */
    public $defenseScenes;

    /**
     * @description The language of the returned information. Default value: en. Valid values:
     *
     *   en: English
     *   cn: Simplified Chinese
     *
     * @example cn
     *
     * @var string
     */
    public $language;
    protected $_name = [
        'defenseScenes' => 'DefenseScenes',
        'language'      => 'Language',
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
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafFilterInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScenes'])) {
            $model->defenseScenes = $map['DefenseScenes'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
