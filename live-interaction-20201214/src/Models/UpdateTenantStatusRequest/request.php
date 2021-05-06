<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateTenantStatusRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description 应用appKey
     *
     * @var string
     */
    public $domain;

    /**
     * @description 应用状态
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'domain' => 'domain',
        'status' => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
