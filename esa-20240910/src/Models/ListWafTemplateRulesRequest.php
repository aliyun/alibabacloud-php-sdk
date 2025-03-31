<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafTemplateRulesRequest\queryArgs;

class ListWafTemplateRulesRequest extends Model
{
    /**
     * @var string
     */
    public $phase;

    /**
     * @var queryArgs
     */
    public $queryArgs;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'phase' => 'Phase',
        'queryArgs' => 'QueryArgs',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        if (null !== $this->queryArgs) {
            $this->queryArgs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = null !== $this->queryArgs ? $this->queryArgs->toArray($noStream) : $this->queryArgs;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['QueryArgs'])) {
            $model->queryArgs = queryArgs::fromMap($map['QueryArgs']);
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
