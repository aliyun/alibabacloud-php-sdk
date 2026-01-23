<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardRequest\standardGetQuery;

class GetStandardRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var standardGetQuery
     */
    public $standardGetQuery;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'standardGetQuery' => 'StandardGetQuery',
    ];

    public function validate()
    {
        if (null !== $this->standardGetQuery) {
            $this->standardGetQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->standardGetQuery) {
            $res['StandardGetQuery'] = null !== $this->standardGetQuery ? $this->standardGetQuery->toArray($noStream) : $this->standardGetQuery;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['StandardGetQuery'])) {
            $model->standardGetQuery = standardGetQuery::fromMap($map['StandardGetQuery']);
        }

        return $model;
    }
}
