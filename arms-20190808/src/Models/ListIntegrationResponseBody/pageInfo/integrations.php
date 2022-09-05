<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListIntegrationResponseBody\pageInfo;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListIntegrationResponseBody\pageInfo\integrations\integrationDetail;
use AlibabaCloud\Tea\Model;

class integrations extends Model
{
    /**
     * @var string
     */
    public $apiEndpoint;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var integrationDetail
     */
    public $integrationDetail;

    /**
     * @var int
     */
    public $integrationId;

    /**
     * @var string
     */
    public $integrationName;

    /**
     * @var string
     */
    public $integrationProductType;

    /**
     * @var string
     */
    public $liveness;

    /**
     * @var string
     */
    public $shortToken;

    /**
     * @var bool
     */
    public $state;
    protected $_name = [
        'apiEndpoint'            => 'ApiEndpoint',
        'createTime'             => 'CreateTime',
        'integrationDetail'      => 'IntegrationDetail',
        'integrationId'          => 'IntegrationId',
        'integrationName'        => 'IntegrationName',
        'integrationProductType' => 'IntegrationProductType',
        'liveness'               => 'Liveness',
        'shortToken'             => 'ShortToken',
        'state'                  => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiEndpoint) {
            $res['ApiEndpoint'] = $this->apiEndpoint;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->integrationDetail) {
            $res['IntegrationDetail'] = null !== $this->integrationDetail ? $this->integrationDetail->toMap() : null;
        }
        if (null !== $this->integrationId) {
            $res['IntegrationId'] = $this->integrationId;
        }
        if (null !== $this->integrationName) {
            $res['IntegrationName'] = $this->integrationName;
        }
        if (null !== $this->integrationProductType) {
            $res['IntegrationProductType'] = $this->integrationProductType;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->shortToken) {
            $res['ShortToken'] = $this->shortToken;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return integrations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiEndpoint'])) {
            $model->apiEndpoint = $map['ApiEndpoint'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IntegrationDetail'])) {
            $model->integrationDetail = integrationDetail::fromMap($map['IntegrationDetail']);
        }
        if (isset($map['IntegrationId'])) {
            $model->integrationId = $map['IntegrationId'];
        }
        if (isset($map['IntegrationName'])) {
            $model->integrationName = $map['IntegrationName'];
        }
        if (isset($map['IntegrationProductType'])) {
            $model->integrationProductType = $map['IntegrationProductType'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['ShortToken'])) {
            $model->shortToken = $map['ShortToken'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
