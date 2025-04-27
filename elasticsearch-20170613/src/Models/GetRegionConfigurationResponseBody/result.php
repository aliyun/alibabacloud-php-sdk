<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\clientNodeAmountRange;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\clientNodeDiskList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\dataDiskList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\elasticNodeProperties;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\esVersionsLatestList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\jvmConfine;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\kibanaNodeProperties;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\masterDiskList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\node;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\nodeSpecList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\supportVersions;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\warmNodeProperties;

class result extends Model
{
    /**
     * @var clientNodeAmountRange
     */
    public $clientNodeAmountRange;

    /**
     * @var clientNodeDiskList[]
     */
    public $clientNodeDiskList;

    /**
     * @var string[]
     */
    public $clientNodeSpec;

    /**
     * @var string
     */
    public $createUrl;

    /**
     * @var dataDiskList[]
     */
    public $dataDiskList;

    /**
     * @var elasticNodeProperties
     */
    public $elasticNodeProperties;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string[]
     */
    public $esVersions;

    /**
     * @var esVersionsLatestList[]
     */
    public $esVersionsLatestList;

    /**
     * @var string[]
     */
    public $instanceSupportNodes;

    /**
     * @var jvmConfine
     */
    public $jvmConfine;

    /**
     * @var kibanaNodeProperties
     */
    public $kibanaNodeProperties;

    /**
     * @var string[]
     */
    public $logstashZones;

    /**
     * @var masterDiskList[]
     */
    public $masterDiskList;

    /**
     * @var string[]
     */
    public $masterSpec;

    /**
     * @var node
     */
    public $node;

    /**
     * @var nodeSpecList[]
     */
    public $nodeSpecList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var supportVersions[]
     */
    public $supportVersions;

    /**
     * @var warmNodeProperties
     */
    public $warmNodeProperties;

    /**
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'clientNodeAmountRange' => 'clientNodeAmountRange',
        'clientNodeDiskList' => 'clientNodeDiskList',
        'clientNodeSpec' => 'clientNodeSpec',
        'createUrl' => 'createUrl',
        'dataDiskList' => 'dataDiskList',
        'elasticNodeProperties' => 'elasticNodeProperties',
        'env' => 'env',
        'esVersions' => 'esVersions',
        'esVersionsLatestList' => 'esVersionsLatestList',
        'instanceSupportNodes' => 'instanceSupportNodes',
        'jvmConfine' => 'jvmConfine',
        'kibanaNodeProperties' => 'kibanaNodeProperties',
        'logstashZones' => 'logstashZones',
        'masterDiskList' => 'masterDiskList',
        'masterSpec' => 'masterSpec',
        'node' => 'node',
        'nodeSpecList' => 'nodeSpecList',
        'regionId' => 'regionId',
        'supportVersions' => 'supportVersions',
        'warmNodeProperties' => 'warmNodeProperties',
        'zones' => 'zones',
    ];

    public function validate()
    {
        if (null !== $this->clientNodeAmountRange) {
            $this->clientNodeAmountRange->validate();
        }
        if (\is_array($this->clientNodeDiskList)) {
            Model::validateArray($this->clientNodeDiskList);
        }
        if (\is_array($this->clientNodeSpec)) {
            Model::validateArray($this->clientNodeSpec);
        }
        if (\is_array($this->dataDiskList)) {
            Model::validateArray($this->dataDiskList);
        }
        if (null !== $this->elasticNodeProperties) {
            $this->elasticNodeProperties->validate();
        }
        if (\is_array($this->esVersions)) {
            Model::validateArray($this->esVersions);
        }
        if (\is_array($this->esVersionsLatestList)) {
            Model::validateArray($this->esVersionsLatestList);
        }
        if (\is_array($this->instanceSupportNodes)) {
            Model::validateArray($this->instanceSupportNodes);
        }
        if (null !== $this->jvmConfine) {
            $this->jvmConfine->validate();
        }
        if (null !== $this->kibanaNodeProperties) {
            $this->kibanaNodeProperties->validate();
        }
        if (\is_array($this->logstashZones)) {
            Model::validateArray($this->logstashZones);
        }
        if (\is_array($this->masterDiskList)) {
            Model::validateArray($this->masterDiskList);
        }
        if (\is_array($this->masterSpec)) {
            Model::validateArray($this->masterSpec);
        }
        if (null !== $this->node) {
            $this->node->validate();
        }
        if (\is_array($this->nodeSpecList)) {
            Model::validateArray($this->nodeSpecList);
        }
        if (\is_array($this->supportVersions)) {
            Model::validateArray($this->supportVersions);
        }
        if (null !== $this->warmNodeProperties) {
            $this->warmNodeProperties->validate();
        }
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientNodeAmountRange) {
            $res['clientNodeAmountRange'] = null !== $this->clientNodeAmountRange ? $this->clientNodeAmountRange->toArray($noStream) : $this->clientNodeAmountRange;
        }

        if (null !== $this->clientNodeDiskList) {
            if (\is_array($this->clientNodeDiskList)) {
                $res['clientNodeDiskList'] = [];
                $n1 = 0;
                foreach ($this->clientNodeDiskList as $item1) {
                    $res['clientNodeDiskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clientNodeSpec) {
            if (\is_array($this->clientNodeSpec)) {
                $res['clientNodeSpec'] = [];
                $n1 = 0;
                foreach ($this->clientNodeSpec as $item1) {
                    $res['clientNodeSpec'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->createUrl) {
            $res['createUrl'] = $this->createUrl;
        }

        if (null !== $this->dataDiskList) {
            if (\is_array($this->dataDiskList)) {
                $res['dataDiskList'] = [];
                $n1 = 0;
                foreach ($this->dataDiskList as $item1) {
                    $res['dataDiskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->elasticNodeProperties) {
            $res['elasticNodeProperties'] = null !== $this->elasticNodeProperties ? $this->elasticNodeProperties->toArray($noStream) : $this->elasticNodeProperties;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->esVersions) {
            if (\is_array($this->esVersions)) {
                $res['esVersions'] = [];
                $n1 = 0;
                foreach ($this->esVersions as $item1) {
                    $res['esVersions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->esVersionsLatestList) {
            if (\is_array($this->esVersionsLatestList)) {
                $res['esVersionsLatestList'] = [];
                $n1 = 0;
                foreach ($this->esVersionsLatestList as $item1) {
                    $res['esVersionsLatestList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceSupportNodes) {
            if (\is_array($this->instanceSupportNodes)) {
                $res['instanceSupportNodes'] = [];
                $n1 = 0;
                foreach ($this->instanceSupportNodes as $item1) {
                    $res['instanceSupportNodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->jvmConfine) {
            $res['jvmConfine'] = null !== $this->jvmConfine ? $this->jvmConfine->toArray($noStream) : $this->jvmConfine;
        }

        if (null !== $this->kibanaNodeProperties) {
            $res['kibanaNodeProperties'] = null !== $this->kibanaNodeProperties ? $this->kibanaNodeProperties->toArray($noStream) : $this->kibanaNodeProperties;
        }

        if (null !== $this->logstashZones) {
            if (\is_array($this->logstashZones)) {
                $res['logstashZones'] = [];
                $n1 = 0;
                foreach ($this->logstashZones as $item1) {
                    $res['logstashZones'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->masterDiskList) {
            if (\is_array($this->masterDiskList)) {
                $res['masterDiskList'] = [];
                $n1 = 0;
                foreach ($this->masterDiskList as $item1) {
                    $res['masterDiskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->masterSpec) {
            if (\is_array($this->masterSpec)) {
                $res['masterSpec'] = [];
                $n1 = 0;
                foreach ($this->masterSpec as $item1) {
                    $res['masterSpec'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->node) {
            $res['node'] = null !== $this->node ? $this->node->toArray($noStream) : $this->node;
        }

        if (null !== $this->nodeSpecList) {
            if (\is_array($this->nodeSpecList)) {
                $res['nodeSpecList'] = [];
                $n1 = 0;
                foreach ($this->nodeSpecList as $item1) {
                    $res['nodeSpecList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->supportVersions) {
            if (\is_array($this->supportVersions)) {
                $res['supportVersions'] = [];
                $n1 = 0;
                foreach ($this->supportVersions as $item1) {
                    $res['supportVersions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->warmNodeProperties) {
            $res['warmNodeProperties'] = null !== $this->warmNodeProperties ? $this->warmNodeProperties->toArray($noStream) : $this->warmNodeProperties;
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['zones'][$n1++] = $item1;
                }
            }
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
        if (isset($map['clientNodeAmountRange'])) {
            $model->clientNodeAmountRange = clientNodeAmountRange::fromMap($map['clientNodeAmountRange']);
        }

        if (isset($map['clientNodeDiskList'])) {
            if (!empty($map['clientNodeDiskList'])) {
                $model->clientNodeDiskList = [];
                $n1 = 0;
                foreach ($map['clientNodeDiskList'] as $item1) {
                    $model->clientNodeDiskList[$n1++] = clientNodeDiskList::fromMap($item1);
                }
            }
        }

        if (isset($map['clientNodeSpec'])) {
            if (!empty($map['clientNodeSpec'])) {
                $model->clientNodeSpec = [];
                $n1 = 0;
                foreach ($map['clientNodeSpec'] as $item1) {
                    $model->clientNodeSpec[$n1++] = $item1;
                }
            }
        }

        if (isset($map['createUrl'])) {
            $model->createUrl = $map['createUrl'];
        }

        if (isset($map['dataDiskList'])) {
            if (!empty($map['dataDiskList'])) {
                $model->dataDiskList = [];
                $n1 = 0;
                foreach ($map['dataDiskList'] as $item1) {
                    $model->dataDiskList[$n1++] = dataDiskList::fromMap($item1);
                }
            }
        }

        if (isset($map['elasticNodeProperties'])) {
            $model->elasticNodeProperties = elasticNodeProperties::fromMap($map['elasticNodeProperties']);
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['esVersions'])) {
            if (!empty($map['esVersions'])) {
                $model->esVersions = [];
                $n1 = 0;
                foreach ($map['esVersions'] as $item1) {
                    $model->esVersions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['esVersionsLatestList'])) {
            if (!empty($map['esVersionsLatestList'])) {
                $model->esVersionsLatestList = [];
                $n1 = 0;
                foreach ($map['esVersionsLatestList'] as $item1) {
                    $model->esVersionsLatestList[$n1++] = esVersionsLatestList::fromMap($item1);
                }
            }
        }

        if (isset($map['instanceSupportNodes'])) {
            if (!empty($map['instanceSupportNodes'])) {
                $model->instanceSupportNodes = [];
                $n1 = 0;
                foreach ($map['instanceSupportNodes'] as $item1) {
                    $model->instanceSupportNodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['jvmConfine'])) {
            $model->jvmConfine = jvmConfine::fromMap($map['jvmConfine']);
        }

        if (isset($map['kibanaNodeProperties'])) {
            $model->kibanaNodeProperties = kibanaNodeProperties::fromMap($map['kibanaNodeProperties']);
        }

        if (isset($map['logstashZones'])) {
            if (!empty($map['logstashZones'])) {
                $model->logstashZones = [];
                $n1 = 0;
                foreach ($map['logstashZones'] as $item1) {
                    $model->logstashZones[$n1++] = $item1;
                }
            }
        }

        if (isset($map['masterDiskList'])) {
            if (!empty($map['masterDiskList'])) {
                $model->masterDiskList = [];
                $n1 = 0;
                foreach ($map['masterDiskList'] as $item1) {
                    $model->masterDiskList[$n1++] = masterDiskList::fromMap($item1);
                }
            }
        }

        if (isset($map['masterSpec'])) {
            if (!empty($map['masterSpec'])) {
                $model->masterSpec = [];
                $n1 = 0;
                foreach ($map['masterSpec'] as $item1) {
                    $model->masterSpec[$n1++] = $item1;
                }
            }
        }

        if (isset($map['node'])) {
            $model->node = node::fromMap($map['node']);
        }

        if (isset($map['nodeSpecList'])) {
            if (!empty($map['nodeSpecList'])) {
                $model->nodeSpecList = [];
                $n1 = 0;
                foreach ($map['nodeSpecList'] as $item1) {
                    $model->nodeSpecList[$n1++] = nodeSpecList::fromMap($item1);
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['supportVersions'])) {
            if (!empty($map['supportVersions'])) {
                $model->supportVersions = [];
                $n1 = 0;
                foreach ($map['supportVersions'] as $item1) {
                    $model->supportVersions[$n1++] = supportVersions::fromMap($item1);
                }
            }
        }

        if (isset($map['warmNodeProperties'])) {
            $model->warmNodeProperties = warmNodeProperties::fromMap($map['warmNodeProperties']);
        }

        if (isset($map['zones'])) {
            if (!empty($map['zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['zones'] as $item1) {
                    $model->zones[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
