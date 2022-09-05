<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class GetQuotaTemplateServiceStatusRequest extends Model
{
    /**
     * @var string
     */
    public $resourceDirectoryId;
    protected $_name = [
        'resourceDirectoryId' => 'ResourceDirectoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuotaTemplateServiceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }

        return $model;
    }
}
