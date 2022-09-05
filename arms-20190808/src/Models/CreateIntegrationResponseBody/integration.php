<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateIntegrationResponseBody;

use AlibabaCloud\Tea\Model;

class integration extends Model
{
    /**
     * @var bool
     */
    public $autoRecover;

    /**
     * @var string
     */
    public $description;

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
     * @var int
     */
    public $recoverTime;
    protected $_name = [
        'autoRecover'            => 'AutoRecover',
        'description'            => 'Description',
        'integrationId'          => 'IntegrationId',
        'integrationName'        => 'IntegrationName',
        'integrationProductType' => 'IntegrationProductType',
        'recoverTime'            => 'RecoverTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRecover) {
            $res['AutoRecover'] = $this->autoRecover;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->recoverTime) {
            $res['RecoverTime'] = $this->recoverTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return integration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRecover'])) {
            $model->autoRecover = $map['AutoRecover'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['RecoverTime'])) {
            $model->recoverTime = $map['RecoverTime'];
        }

        return $model;
    }
}
