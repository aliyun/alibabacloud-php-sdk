<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListWafTemplateRulesShrinkRequest extends Model
{
    /**
     * @example http_anti_scan
     *
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $queryArgsShrink;
    protected $_name = [
        'phase'           => 'Phase',
        'queryArgsShrink' => 'QueryArgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->queryArgsShrink) {
            $res['QueryArgs'] = $this->queryArgsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWafTemplateRulesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['QueryArgs'])) {
            $model->queryArgsShrink = $map['QueryArgs'];
        }

        return $model;
    }
}
