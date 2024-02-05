<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest;

use AlibabaCloud\Tea\Model;

class partnerInfo extends Model
{
    /**
     * @example abc
     *
     * @var string
     */
    public $partnerId;

    /**
     * @example abc
     *
     * @var string
     */
    public $partnerName;
    protected $_name = [
        'partnerId'   => 'PartnerId',
        'partnerName' => 'PartnerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }
        if (null !== $this->partnerName) {
            $res['PartnerName'] = $this->partnerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return partnerInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }
        if (isset($map['PartnerName'])) {
            $model->partnerName = $map['PartnerName'];
        }

        return $model;
    }
}
