<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RpcListInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $advancedDedicateMaster;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $dataNode;

    /**
     * @var bool
     */
    public $dedicateMaster;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $enableKibanaPrivateNetwork;

    /**
     * @var bool
     */
    public $enableKibanaPublicNetwork;

    /**
     * @var bool
     */
    public $enablePublic;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $esVersion;

    /**
     * @var bool
     */
    public $haveCerebro;

    /**
     * @var bool
     */
    public $haveClientNode;

    /**
     * @var bool
     */
    public $haveElasticDataNode;

    /**
     * @var bool
     */
    public $haveGrafana;

    /**
     * @var bool
     */
    public $haveKibana;

    /**
     * @var bool
     */
    public $inited;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isNewDeployment;

    /**
     * @var string
     */
    public $kibanaProtocol;

    /**
     * @var int
     */
    public $nodeAmount;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $version;

    /**
     * @var bool
     */
    public $warmNode;

    /**
     * @var int
     */
    public $zoneCount;
    protected $_name = [
        'advancedDedicateMaster'     => 'AdvancedDedicateMaster',
        'createdAt'                  => 'CreatedAt',
        'dataNode'                   => 'DataNode',
        'dedicateMaster'             => 'DedicateMaster',
        'description'                => 'Description',
        'domain'                     => 'Domain',
        'enableKibanaPrivateNetwork' => 'EnableKibanaPrivateNetwork',
        'enableKibanaPublicNetwork'  => 'EnableKibanaPublicNetwork',
        'enablePublic'               => 'EnablePublic',
        'endTime'                    => 'EndTime',
        'esVersion'                  => 'EsVersion',
        'haveCerebro'                => 'HaveCerebro',
        'haveClientNode'             => 'HaveClientNode',
        'haveElasticDataNode'        => 'HaveElasticDataNode',
        'haveGrafana'                => 'HaveGrafana',
        'haveKibana'                 => 'HaveKibana',
        'inited'                     => 'Inited',
        'instanceId'                 => 'InstanceId',
        'instanceType'               => 'InstanceType',
        'isNewDeployment'            => 'IsNewDeployment',
        'kibanaProtocol'             => 'KibanaProtocol',
        'nodeAmount'                 => 'NodeAmount',
        'paymentType'                => 'PaymentType',
        'protocol'                   => 'Protocol',
        'resourceGroupId'            => 'ResourceGroupId',
        'status'                     => 'Status',
        'updatedAt'                  => 'UpdatedAt',
        'version'                    => 'Version',
        'warmNode'                   => 'WarmNode',
        'zoneCount'                  => 'ZoneCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedDedicateMaster) {
            $res['AdvancedDedicateMaster'] = $this->advancedDedicateMaster;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->dataNode) {
            $res['DataNode'] = $this->dataNode;
        }
        if (null !== $this->dedicateMaster) {
            $res['DedicateMaster'] = $this->dedicateMaster;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enableKibanaPrivateNetwork) {
            $res['EnableKibanaPrivateNetwork'] = $this->enableKibanaPrivateNetwork;
        }
        if (null !== $this->enableKibanaPublicNetwork) {
            $res['EnableKibanaPublicNetwork'] = $this->enableKibanaPublicNetwork;
        }
        if (null !== $this->enablePublic) {
            $res['EnablePublic'] = $this->enablePublic;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->esVersion) {
            $res['EsVersion'] = $this->esVersion;
        }
        if (null !== $this->haveCerebro) {
            $res['HaveCerebro'] = $this->haveCerebro;
        }
        if (null !== $this->haveClientNode) {
            $res['HaveClientNode'] = $this->haveClientNode;
        }
        if (null !== $this->haveElasticDataNode) {
            $res['HaveElasticDataNode'] = $this->haveElasticDataNode;
        }
        if (null !== $this->haveGrafana) {
            $res['HaveGrafana'] = $this->haveGrafana;
        }
        if (null !== $this->haveKibana) {
            $res['HaveKibana'] = $this->haveKibana;
        }
        if (null !== $this->inited) {
            $res['Inited'] = $this->inited;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isNewDeployment) {
            $res['IsNewDeployment'] = $this->isNewDeployment;
        }
        if (null !== $this->kibanaProtocol) {
            $res['KibanaProtocol'] = $this->kibanaProtocol;
        }
        if (null !== $this->nodeAmount) {
            $res['NodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->warmNode) {
            $res['WarmNode'] = $this->warmNode;
        }
        if (null !== $this->zoneCount) {
            $res['ZoneCount'] = $this->zoneCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedDedicateMaster'])) {
            $model->advancedDedicateMaster = $map['AdvancedDedicateMaster'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['DataNode'])) {
            $model->dataNode = $map['DataNode'];
        }
        if (isset($map['DedicateMaster'])) {
            $model->dedicateMaster = $map['DedicateMaster'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EnableKibanaPrivateNetwork'])) {
            $model->enableKibanaPrivateNetwork = $map['EnableKibanaPrivateNetwork'];
        }
        if (isset($map['EnableKibanaPublicNetwork'])) {
            $model->enableKibanaPublicNetwork = $map['EnableKibanaPublicNetwork'];
        }
        if (isset($map['EnablePublic'])) {
            $model->enablePublic = $map['EnablePublic'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EsVersion'])) {
            $model->esVersion = $map['EsVersion'];
        }
        if (isset($map['HaveCerebro'])) {
            $model->haveCerebro = $map['HaveCerebro'];
        }
        if (isset($map['HaveClientNode'])) {
            $model->haveClientNode = $map['HaveClientNode'];
        }
        if (isset($map['HaveElasticDataNode'])) {
            $model->haveElasticDataNode = $map['HaveElasticDataNode'];
        }
        if (isset($map['HaveGrafana'])) {
            $model->haveGrafana = $map['HaveGrafana'];
        }
        if (isset($map['HaveKibana'])) {
            $model->haveKibana = $map['HaveKibana'];
        }
        if (isset($map['Inited'])) {
            $model->inited = $map['Inited'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsNewDeployment'])) {
            $model->isNewDeployment = $map['IsNewDeployment'];
        }
        if (isset($map['KibanaProtocol'])) {
            $model->kibanaProtocol = $map['KibanaProtocol'];
        }
        if (isset($map['NodeAmount'])) {
            $model->nodeAmount = $map['NodeAmount'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['WarmNode'])) {
            $model->warmNode = $map['WarmNode'];
        }
        if (isset($map['ZoneCount'])) {
            $model->zoneCount = $map['ZoneCount'];
        }

        return $model;
    }
}
