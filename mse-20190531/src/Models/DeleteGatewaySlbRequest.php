<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewaySlbRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Specifies whether to delete the SLB instance purchased for the gateway when you delete the gateway.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteSlb;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-c9bc5afd61014165bd58f621b491****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The ID of the association record.
     *
     * @example 395
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the SLB instance that needs to be deleted.
     *
     * @example lb-uf6duug6s13x4abc8****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteGatewaySlbRequest
     */
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
