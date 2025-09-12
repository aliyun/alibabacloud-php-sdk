<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceForTerraformResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceForTerraformResponseBody\engineList\connectAddressList;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceForTerraformResponseBody\engineList\nodeGroup;

class engineList extends Model
{
    /**
     * @var connectAddressList[]
     */
    public $connectAddressList;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var bool
     */
    public $isLastVersion;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var nodeGroup[]
     */
    public $nodeGroup;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'connectAddressList' => 'ConnectAddressList',
        'engine' => 'Engine',
        'isLastVersion' => 'IsLastVersion',
        'latestVersion' => 'LatestVersion',
        'nodeGroup' => 'NodeGroup',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->connectAddressList)) {
            Model::validateArray($this->connectAddressList);
        }
        if (\is_array($this->nodeGroup)) {
            Model::validateArray($this->nodeGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectAddressList) {
            if (\is_array($this->connectAddressList)) {
                $res['ConnectAddressList'] = [];
                $n1 = 0;
                foreach ($this->connectAddressList as $item1) {
                    $res['ConnectAddressList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->isLastVersion) {
            $res['IsLastVersion'] = $this->isLastVersion;
        }

        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }

        if (null !== $this->nodeGroup) {
            if (\is_array($this->nodeGroup)) {
                $res['NodeGroup'] = [];
                $n1 = 0;
                foreach ($this->nodeGroup as $item1) {
                    $res['NodeGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ConnectAddressList'])) {
            if (!empty($map['ConnectAddressList'])) {
                $model->connectAddressList = [];
                $n1 = 0;
                foreach ($map['ConnectAddressList'] as $item1) {
                    $model->connectAddressList[$n1] = connectAddressList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['IsLastVersion'])) {
            $model->isLastVersion = $map['IsLastVersion'];
        }

        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }

        if (isset($map['NodeGroup'])) {
            if (!empty($map['NodeGroup'])) {
                $model->nodeGroup = [];
                $n1 = 0;
                foreach ($map['NodeGroup'] as $item1) {
                    $model->nodeGroup[$n1] = nodeGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
