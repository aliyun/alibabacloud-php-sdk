<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings;

use AlibabaCloud\Tea\Model;

class addSecurityHeaders extends Model
{
    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'enable' => 'Enable',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addSecurityHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
