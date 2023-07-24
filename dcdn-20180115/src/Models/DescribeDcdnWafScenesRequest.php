<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnWafScenesRequest extends Model
{
    /**
     * @description The types of the protection policies that you want to query. Separate multiple types with commas (,). Valid values:
     *
     *   waf_group: basic web protection
     *   custom_acl: custom protection
     *   whitelist: IP address whitelist
     *   ip_blacklist: IP address blacklist
     *   region_block: region blacklist
     *   bot: bot management
     *
     * > If you do not set this parameter, all types of protection policies are queried.
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
