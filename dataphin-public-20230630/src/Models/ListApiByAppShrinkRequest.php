<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class ListApiByAppShrinkRequest extends Model
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
     * @var string
     */
    public $pageQueryShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'pageQueryShrink' => 'PageQuery',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->pageQueryShrink) {
            $res['PageQuery'] = $this->pageQueryShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApiByAppShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['PageQuery'])) {
            $model->pageQueryShrink = $map['PageQuery'];
        }

        return $model;
    }
}
