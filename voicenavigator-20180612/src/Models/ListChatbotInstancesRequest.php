<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

class ListChatbotInstancesRequest extends Model
{
    /**
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
     * @var int
     */
    public $pageNumber;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
