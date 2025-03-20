<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetWafQuotaRequest extends Model
{
    /**
     * @description The path of the WAF quota, for example:
     * managed_rules_group: represents the quota for the WAF managed rules group
     * list: represents the quota for custom lists
     * page: represents the quota for custom response pages
     * scene_policy: represents the quota for scenario protection
     *
     * @example page
     *
     * @var string
     */
    public $paths;
    protected $_name = [
        'paths' => 'Paths',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWafQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Paths'])) {
            $model->paths = $map['Paths'];
        }

        return $model;
    }
}
