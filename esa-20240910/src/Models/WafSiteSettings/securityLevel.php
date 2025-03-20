<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings;

use AlibabaCloud\Tea\Model;

class securityLevel extends Model
{
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityLevel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
