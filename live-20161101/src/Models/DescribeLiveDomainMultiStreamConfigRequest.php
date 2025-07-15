<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDomainMultiStreamConfigRequest extends Model
{
    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example pliveplay.gstv.com.cn
     *
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'domain' => 'Domain',
        'ownerId' => 'OwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainMultiStreamConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
