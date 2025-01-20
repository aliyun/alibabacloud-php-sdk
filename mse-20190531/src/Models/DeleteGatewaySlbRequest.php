<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class DeleteGatewaySlbRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var bool
     */
    public $deleteSlb;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $slbId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'deleteSlb'       => 'DeleteSlb',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id'              => 'Id',
        'slbId'           => 'SlbId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->deleteSlb) {
            $res['DeleteSlb'] = $this->deleteSlb;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['DeleteSlb'])) {
            $model->deleteSlb = $map['DeleteSlb'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }

        return $model;
    }
}
