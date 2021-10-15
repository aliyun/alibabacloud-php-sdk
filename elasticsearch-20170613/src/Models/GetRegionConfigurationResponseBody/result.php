<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody;

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
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $createUrl;

    /**
     * @var dataDiskList[]
     */
    public $dataDiskList;

    /**
     * @var esVersionsLatestList[]
     */
    public $esVersionsLatestList;

    /**
     * @var nodeSpecList[]
     */
    public $nodeSpecList;

    /**
     * @var clientNodeDiskList[]
     */
    public $clientNodeDiskList;

    /**
     * @var masterDiskList[]
     */
    public $masterDiskList;

    /**
     * @var supportVersions[]
     */
    public $supportVersions;

    /**
     * @var string[]
     */
    public $masterSpec;

    /**
     * @var string[]
     */
    public $clientNodeSpec;

    /**
     * @var string[]
     */
    public $zones;

    /**
     * @var string[]
     */
    public $instanceSupportNodes;

    /**
     * @var string[]
     */
    public $esVersions;

    /**
     * @var node
     */
    public $node;

    /**
     * @var jvmConfine
     */
    public $jvmConfine;

    /**
     * @var clientNodeAmountRange
     */
    public $clientNodeAmountRange;

    /**
     * @var warmNodeProperties
     */
    public $warmNodeProperties;

    /**
     * @var kibanaNodeProperties
     */
    public $kibanaNodeProperties;

    /**
     * @var elasticNodeProperties
     */
    public $elasticNodeProperties;
    protected $_name = [
        'env'                   => 'env',
        'regionId'              => 'regionId',
        'createUrl'             => 'createUrl',
        'dataDiskList'          => 'dataDiskList',
        'esVersionsLatestList'  => 'esVersionsLatestList',
        'nodeSpecList'          => 'nodeSpecList',
        'clientNodeDiskList'    => 'clientNodeDiskList',
        'masterDiskList'        => 'masterDiskList',
        'supportVersions'       => 'supportVersions',
        'masterSpec'            => 'masterSpec',
        'clientNodeSpec'        => 'clientNodeSpec',
        'zones'                 => 'zones',
        'instanceSupportNodes'  => 'instanceSupportNodes',
        'esVersions'            => 'esVersions',
        'node'                  => 'node',
        'jvmConfine'            => 'jvmConfine',
        'clientNodeAmountRange' => 'clientNodeAmountRange',
        'warmNodeProperties'    => 'warmNodeProperties',
        'kibanaNodeProperties'  => 'kibanaNodeProperties',
        'elasticNodeProperties' => 'elasticNodeProperties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['env'] = $this->env;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->createUrl) {
            $res['createUrl'] = $this->createUrl;
        }
        if (null !== $this->dataDiskList) {
            $res['dataDiskList'] = [];
            if (null !== $this->dataDiskList && \is_array($this->dataDiskList)) {
                $n = 0;
                foreach ($this->dataDiskList as $item) {
                    $res['dataDiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->esVersionsLatestList) {
            $res['esVersionsLatestList'] = [];
            if (null !== $this->esVersionsLatestList && \is_array($this->esVersionsLatestList)) {
                $n = 0;
                foreach ($this->esVersionsLatestList as $item) {
                    $res['esVersionsLatestList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeSpecList) {
            $res['nodeSpecList'] = [];
            if (null !== $this->nodeSpecList && \is_array($this->nodeSpecList)) {
                $n = 0;
                foreach ($this->nodeSpecList as $item) {
                    $res['nodeSpecList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientNodeDiskList) {
            $res['clientNodeDiskList'] = [];
            if (null !== $this->clientNodeDiskList && \is_array($this->clientNodeDiskList)) {
                $n = 0;
                foreach ($this->clientNodeDiskList as $item) {
                    $res['clientNodeDiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->masterDiskList) {
            $res['masterDiskList'] = [];
            if (null !== $this->masterDiskList && \is_array($this->masterDiskList)) {
                $n = 0;
                foreach ($this->masterDiskList as $item) {
                    $res['masterDiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportVersions) {
            $res['supportVersions'] = [];
            if (null !== $this->supportVersions && \is_array($this->supportVersions)) {
                $n = 0;
                foreach ($this->supportVersions as $item) {
                    $res['supportVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->masterSpec) {
            $res['masterSpec'] = $this->masterSpec;
        }
        if (null !== $this->clientNodeSpec) {
            $res['clientNodeSpec'] = $this->clientNodeSpec;
        }
        if (null !== $this->zones) {
            $res['zones'] = $this->zones;
        }
        if (null !== $this->instanceSupportNodes) {
            $res['instanceSupportNodes'] = $this->instanceSupportNodes;
        }
        if (null !== $this->esVersions) {
            $res['esVersions'] = $this->esVersions;
        }
        if (null !== $this->node) {
            $res['node'] = null !== $this->node ? $this->node->toMap() : null;
        }
        if (null !== $this->jvmConfine) {
            $res['jvmConfine'] = null !== $this->jvmConfine ? $this->jvmConfine->toMap() : null;
        }
        if (null !== $this->clientNodeAmountRange) {
            $res['clientNodeAmountRange'] = null !== $this->clientNodeAmountRange ? $this->clientNodeAmountRange->toMap() : null;
        }
        if (null !== $this->warmNodeProperties) {
            $res['warmNodeProperties'] = null !== $this->warmNodeProperties ? $this->warmNodeProperties->toMap() : null;
        }
        if (null !== $this->kibanaNodeProperties) {
            $res['kibanaNodeProperties'] = null !== $this->kibanaNodeProperties ? $this->kibanaNodeProperties->toMap() : null;
        }
        if (null !== $this->elasticNodeProperties) {
            $res['elasticNodeProperties'] = null !== $this->elasticNodeProperties ? $this->elasticNodeProperties->toMap() : null;
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
        if (isset($map['env'])) {
            $model->env = $map['env'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['createUrl'])) {
            $model->createUrl = $map['createUrl'];
        }
        if (isset($map['dataDiskList'])) {
            if (!empty($map['dataDiskList'])) {
                $model->dataDiskList = [];
                $n                   = 0;
                foreach ($map['dataDiskList'] as $item) {
                    $model->dataDiskList[$n++] = null !== $item ? dataDiskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['esVersionsLatestList'])) {
            if (!empty($map['esVersionsLatestList'])) {
                $model->esVersionsLatestList = [];
                $n                           = 0;
                foreach ($map['esVersionsLatestList'] as $item) {
                    $model->esVersionsLatestList[$n++] = null !== $item ? esVersionsLatestList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nodeSpecList'])) {
            if (!empty($map['nodeSpecList'])) {
                $model->nodeSpecList = [];
                $n                   = 0;
                foreach ($map['nodeSpecList'] as $item) {
                    $model->nodeSpecList[$n++] = null !== $item ? nodeSpecList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['clientNodeDiskList'])) {
            if (!empty($map['clientNodeDiskList'])) {
                $model->clientNodeDiskList = [];
                $n                         = 0;
                foreach ($map['clientNodeDiskList'] as $item) {
                    $model->clientNodeDiskList[$n++] = null !== $item ? clientNodeDiskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['masterDiskList'])) {
            if (!empty($map['masterDiskList'])) {
                $model->masterDiskList = [];
                $n                     = 0;
                foreach ($map['masterDiskList'] as $item) {
                    $model->masterDiskList[$n++] = null !== $item ? masterDiskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['supportVersions'])) {
            if (!empty($map['supportVersions'])) {
                $model->supportVersions = [];
                $n                      = 0;
                foreach ($map['supportVersions'] as $item) {
                    $model->supportVersions[$n++] = null !== $item ? supportVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['masterSpec'])) {
            if (!empty($map['masterSpec'])) {
                $model->masterSpec = $map['masterSpec'];
            }
        }
        if (isset($map['clientNodeSpec'])) {
            if (!empty($map['clientNodeSpec'])) {
                $model->clientNodeSpec = $map['clientNodeSpec'];
            }
        }
        if (isset($map['zones'])) {
            if (!empty($map['zones'])) {
                $model->zones = $map['zones'];
            }
        }
        if (isset($map['instanceSupportNodes'])) {
            if (!empty($map['instanceSupportNodes'])) {
                $model->instanceSupportNodes = $map['instanceSupportNodes'];
            }
        }
        if (isset($map['esVersions'])) {
            if (!empty($map['esVersions'])) {
                $model->esVersions = $map['esVersions'];
            }
        }
        if (isset($map['node'])) {
            $model->node = node::fromMap($map['node']);
        }
        if (isset($map['jvmConfine'])) {
            $model->jvmConfine = jvmConfine::fromMap($map['jvmConfine']);
        }
        if (isset($map['clientNodeAmountRange'])) {
            $model->clientNodeAmountRange = clientNodeAmountRange::fromMap($map['clientNodeAmountRange']);
        }
        if (isset($map['warmNodeProperties'])) {
            $model->warmNodeProperties = warmNodeProperties::fromMap($map['warmNodeProperties']);
        }
        if (isset($map['kibanaNodeProperties'])) {
            $model->kibanaNodeProperties = kibanaNodeProperties::fromMap($map['kibanaNodeProperties']);
        }
        if (isset($map['elasticNodeProperties'])) {
            $model->elasticNodeProperties = elasticNodeProperties::fromMap($map['elasticNodeProperties']);
        }

        return $model;
    }
}
