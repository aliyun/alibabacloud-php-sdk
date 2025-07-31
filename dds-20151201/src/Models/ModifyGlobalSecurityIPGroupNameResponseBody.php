<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\ModifyGlobalSecurityIPGroupNameResponseBody\globalSecurityIPGroup;
use AlibabaCloud\Tea\Model;

class ModifyGlobalSecurityIPGroupNameResponseBody extends Model
{
    /**
     * @description The global IP whitelist templates.
     *
     * @var globalSecurityIPGroup[]
     */
    public $globalSecurityIPGroup;

    /**
     * @description The request ID.
     *
     * @example F8CA8312-530A-413A-9129-F2BB32A8D404
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'globalSecurityIPGroup' => 'GlobalSecurityIPGroup',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalSecurityIPGroup) {
            $res['GlobalSecurityIPGroup'] = [];
            if (null !== $this->globalSecurityIPGroup && \is_array($this->globalSecurityIPGroup)) {
                $n = 0;
                foreach ($this->globalSecurityIPGroup as $item) {
                    $res['GlobalSecurityIPGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGlobalSecurityIPGroupNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalSecurityIPGroup'])) {
            if (!empty($map['GlobalSecurityIPGroup'])) {
                $model->globalSecurityIPGroup = [];
                $n = 0;
                foreach ($map['GlobalSecurityIPGroup'] as $item) {
                    $model->globalSecurityIPGroup[$n++] = null !== $item ? globalSecurityIPGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
