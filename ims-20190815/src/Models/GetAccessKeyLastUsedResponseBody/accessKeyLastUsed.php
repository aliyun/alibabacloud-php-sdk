<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedResponseBody;

use AlibabaCloud\Tea\Model;

class accessKeyLastUsed extends Model
{
    /**
     * @example 2020-10-16T01:37:37Z
     *
     * @var string
     */
    public $lastUsedDate;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'lastUsedDate' => 'LastUsedDate',
        'serviceName'  => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastUsedDate) {
            $res['LastUsedDate'] = $this->lastUsedDate;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessKeyLastUsed
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastUsedDate'])) {
            $model->lastUsedDate = $map['LastUsedDate'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
