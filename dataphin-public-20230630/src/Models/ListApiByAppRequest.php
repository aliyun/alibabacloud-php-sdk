<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppRequest\pageQuery;

class ListApiByAppRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var pageQuery
     */
    public $pageQuery;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'pageQuery' => 'PageQuery',
    ];

    public function validate()
    {
        if (null !== $this->pageQuery) {
            $this->pageQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->pageQuery) {
            $res['PageQuery'] = null !== $this->pageQuery ? $this->pageQuery->toArray($noStream) : $this->pageQuery;
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

        if (isset($map['PageQuery'])) {
            $model->pageQuery = pageQuery::fromMap($map['PageQuery']);
        }

        return $model;
    }
}
