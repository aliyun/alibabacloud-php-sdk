<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetTenantStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $tenantStatus;
    protected $_name = [
        'tenantStatus' => 'tenantStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantStatus) {
            $res['tenantStatus'] = $this->tenantStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tenantStatus'])) {
            $model->tenantStatus = $map['tenantStatus'];
        }

        return $model;
    }
}
