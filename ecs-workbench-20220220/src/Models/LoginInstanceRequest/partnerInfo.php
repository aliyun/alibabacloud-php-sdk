<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest;

use AlibabaCloud\Dara\Model;

class partnerInfo extends Model
{
    /**
     * @var string
     */
    public $partnerId;

    /**
     * @var string
     */
    public $partnerName;
    protected $_name = [
        'partnerId' => 'PartnerId',
        'partnerName' => 'PartnerName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
