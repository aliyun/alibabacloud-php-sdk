<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListGatewayAuthConsumerRequest extends Model
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
     * @description The status of the consumer. Valid values:
     *
     *   true: enabled
     *   false: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $consumerStatus;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-0fe488252dc44d55a9dd57875193****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The name of the consumer.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The authentication type. Valid values:
     *
     *   JWT
     *
     * @example JWT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'consumerStatus'  => 'ConsumerStatus',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'name'            => 'Name',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'type'            => 'Type',
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
        if (null !== $this->consumerStatus) {
            $res['ConsumerStatus'] = $this->consumerStatus;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGatewayAuthConsumerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ConsumerStatus'])) {
            $model->consumerStatus = $map['ConsumerStatus'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
