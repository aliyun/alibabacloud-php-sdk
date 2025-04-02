<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody\data\appDetail;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody\data\clusters;

class data extends Model
{
    /**
     * @var appDetail
     */
    public $appDetail;

    /**
     * @var clusters[]
     */
    public $clusters;

    /**
     * @var bool
     */
    public $ephemeral;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $protectThreshold;

    /**
     * @var string
     */
    public $selectorType;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'appDetail' => 'AppDetail',
        'clusters' => 'Clusters',
        'ephemeral' => 'Ephemeral',
        'groupName' => 'GroupName',
        'metadata' => 'Metadata',
        'name' => 'Name',
        'protectThreshold' => 'ProtectThreshold',
        'selectorType' => 'SelectorType',
        'source' => 'Source',
    ];

    public function validate()
    {
        if (null !== $this->appDetail) {
            $this->appDetail->validate();
        }
        if (\is_array($this->clusters)) {
            Model::validateArray($this->clusters);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appDetail) {
            $res['AppDetail'] = null !== $this->appDetail ? $this->appDetail->toArray($noStream) : $this->appDetail;
        }

        if (null !== $this->clusters) {
            if (\is_array($this->clusters)) {
                $res['Clusters'] = [];
                $n1 = 0;
                foreach ($this->clusters as $item1) {
                    $res['Clusters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ephemeral) {
            $res['Ephemeral'] = $this->ephemeral;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protectThreshold) {
            $res['ProtectThreshold'] = $this->protectThreshold;
        }

        if (null !== $this->selectorType) {
            $res['SelectorType'] = $this->selectorType;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['AppDetail'])) {
            $model->appDetail = appDetail::fromMap($map['AppDetail']);
        }

        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $n1 = 0;
                foreach ($map['Clusters'] as $item1) {
                    $model->clusters[$n1++] = clusters::fromMap($item1);
                }
            }
        }

        if (isset($map['Ephemeral'])) {
            $model->ephemeral = $map['Ephemeral'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProtectThreshold'])) {
            $model->protectThreshold = $map['ProtectThreshold'];
        }

        if (isset($map['SelectorType'])) {
            $model->selectorType = $map['SelectorType'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
