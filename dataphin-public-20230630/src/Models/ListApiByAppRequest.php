<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppRequest\pageQuery;
use AlibabaCloud\Tea\Model;

class ListApiByAppRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @var pageQuery
     */
    public $pageQuery;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'pageQuery' => 'PageQuery',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->pageQuery) {
            $res['PageQuery'] = null !== $this->pageQuery ? $this->pageQuery->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApiByAppRequest
     */
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
