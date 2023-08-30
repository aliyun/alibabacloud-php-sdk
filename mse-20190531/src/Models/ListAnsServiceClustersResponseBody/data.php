<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody\data\appDetail;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody\data\clusters;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var appDetail
     */
    public $appDetail;

    /**
     * @description The information about the clusters.
     *
     * @var clusters[]
     */
    public $clusters;

    /**
     * @description Indicates whether the service is a temporary service. Valid values:
     *
     *   `true`: yes
     *   `false`: no
     *
     * @example true
     *
     * @var bool
     */
    public $ephemeral;

    /**
     * @description The name of the contact group.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The metadata of the service.
     *
     * @example 111
     *
     * @var mixed[]
     */
    public $metadata;

    /**
     * @description The name of the service.
     *
     * @example nacos.test.3
     *
     * @var string
     */
    public $name;

    /**
     * @description The protection threshold.
     *
     * @example 0
     *
     * @var float
     */
    public $protectThreshold;

    /**
     * @description The election mode.
     *
     * @example none
     *
     * @var string
     */
    public $selectorType;

    /**
     * @example console
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'appDetail'        => 'AppDetail',
        'clusters'         => 'Clusters',
        'ephemeral'        => 'Ephemeral',
        'groupName'        => 'GroupName',
        'metadata'         => 'Metadata',
        'name'             => 'Name',
        'protectThreshold' => 'ProtectThreshold',
        'selectorType'     => 'SelectorType',
        'source'           => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDetail) {
            $res['AppDetail'] = null !== $this->appDetail ? $this->appDetail->toMap() : null;
        }
        if (null !== $this->clusters) {
            $res['Clusters'] = [];
            if (null !== $this->clusters && \is_array($this->clusters)) {
                $n = 0;
                foreach ($this->clusters as $item) {
                    $res['Clusters'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Metadata'] = $this->metadata;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDetail'])) {
            $model->appDetail = appDetail::fromMap($map['AppDetail']);
        }
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $n               = 0;
                foreach ($map['Clusters'] as $item) {
                    $model->clusters[$n++] = null !== $item ? clusters::fromMap($item) : $item;
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
            $model->metadata = $map['Metadata'];
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
