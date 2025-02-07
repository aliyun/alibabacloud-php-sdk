<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedResponseBody;

use AlibabaCloud\Dara\Model;

class accessKeyLastUsed extends Model
{
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
