<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafTemplateRulesRequest\queryArgs;
use AlibabaCloud\Tea\Model;

class ListWafTemplateRulesRequest extends Model
{
    /**
     * @example http_anti_scan
     *
     * @var string
     */
    public $phase;

    /**
     * @var queryArgs
     */
    public $queryArgs;
    protected $_name = [
        'phase'     => 'Phase',
        'queryArgs' => 'QueryArgs',
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
        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = null !== $this->queryArgs ? $this->queryArgs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWafTemplateRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['QueryArgs'])) {
            $model->queryArgs = queryArgs::fromMap($map['QueryArgs']);
        }

        return $model;
    }
}
