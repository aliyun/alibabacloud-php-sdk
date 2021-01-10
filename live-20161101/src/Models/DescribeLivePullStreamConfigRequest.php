<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLivePullStreamConfigRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $liveapiRequestFrom;
    protected $_name = [
        'ownerId'            => 'OwnerId',
        'domainName'         => 'DomainName',
        'liveapiRequestFrom' => 'LiveapiRequestFrom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->liveapiRequestFrom) {
            $res['LiveapiRequestFrom'] = $this->liveapiRequestFrom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLivePullStreamConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LiveapiRequestFrom'])) {
            $model->liveapiRequestFrom = $map['LiveapiRequestFrom'];
        }

        return $model;
    }
}
