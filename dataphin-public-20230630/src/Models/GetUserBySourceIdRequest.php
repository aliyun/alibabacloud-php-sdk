<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetUserBySourceIdRequest extends Model
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
     * @example 323131
     *
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'sourceId' => 'SourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserBySourceIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}
