<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentriesInfoRequest;

use AlibabaCloud\Tea\Model;

class tenantContext extends Model
{
    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'tenantId' => 'tenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
