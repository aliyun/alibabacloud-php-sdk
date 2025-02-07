<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class UpdateOIDCProviderRequest extends Model
{
    /**
     * @var string
     */
    public $clientIds;
    /**
     * @var int
     */
    public $issuanceLimitTime;
    /**
     * @var string
     */
    public $newDescription;
    /**
     * @var string
     */
    public $OIDCProviderName;
    protected $_name = [
        'clientIds'         => 'ClientIds',
        'issuanceLimitTime' => 'IssuanceLimitTime',
        'newDescription'    => 'NewDescription',
        'OIDCProviderName'  => 'OIDCProviderName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIds) {
            $res['ClientIds'] = $this->clientIds;
        }

        if (null !== $this->issuanceLimitTime) {
            $res['IssuanceLimitTime'] = $this->issuanceLimitTime;
        }

        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }

        if (null !== $this->OIDCProviderName) {
            $res['OIDCProviderName'] = $this->OIDCProviderName;
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
        if (isset($map['ClientIds'])) {
            $model->clientIds = $map['ClientIds'];
        }

        if (isset($map['IssuanceLimitTime'])) {
            $model->issuanceLimitTime = $map['IssuanceLimitTime'];
        }

        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }

        if (isset($map['OIDCProviderName'])) {
            $model->OIDCProviderName = $map['OIDCProviderName'];
        }

        return $model;
    }
}
