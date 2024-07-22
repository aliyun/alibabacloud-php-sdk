<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ListChatbotInstancesRequest extends Model
{
    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nluServiceParamsJson;

    /**
     * @var string
     */
    public $nluServiceType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $unionSource;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'nluServiceParamsJson' => 'NluServiceParamsJson',
        'nluServiceType'       => 'NluServiceType',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'unionSource'          => 'UnionSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nluServiceParamsJson) {
            $res['NluServiceParamsJson'] = $this->nluServiceParamsJson;
        }
        if (null !== $this->nluServiceType) {
            $res['NluServiceType'] = $this->nluServiceType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->unionSource) {
            $res['UnionSource'] = $this->unionSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChatbotInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NluServiceParamsJson'])) {
            $model->nluServiceParamsJson = $map['NluServiceParamsJson'];
        }
        if (isset($map['NluServiceType'])) {
            $model->nluServiceType = $map['NluServiceType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UnionSource'])) {
            $model->unionSource = $map['UnionSource'];
        }

        return $model;
    }
}
