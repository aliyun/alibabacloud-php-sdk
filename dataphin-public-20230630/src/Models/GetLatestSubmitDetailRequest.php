<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetLatestSubmitDetailRequest\submitDetailQuery;

class GetLatestSubmitDetailRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var submitDetailQuery
     */
    public $submitDetailQuery;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'submitDetailQuery' => 'SubmitDetailQuery',
    ];

    public function validate()
    {
        if (null !== $this->submitDetailQuery) {
            $this->submitDetailQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->submitDetailQuery) {
            $res['SubmitDetailQuery'] = null !== $this->submitDetailQuery ? $this->submitDetailQuery->toArray($noStream) : $this->submitDetailQuery;
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

        if (isset($map['SubmitDetailQuery'])) {
            $model->submitDetailQuery = submitDetailQuery::fromMap($map['SubmitDetailQuery']);
        }

        return $model;
    }
}
