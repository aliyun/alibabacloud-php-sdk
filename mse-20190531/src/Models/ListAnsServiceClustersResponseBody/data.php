<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody\data\clusters;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var clusters[]
     */
    public $clusters;

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
    protected $_name = [
        'clusters'         => 'Clusters',
        'groupName'        => 'GroupName',
        'metadata'         => 'Metadata',
        'name'             => 'Name',
        'protectThreshold' => 'ProtectThreshold',
        'selectorType'     => 'SelectorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusters) {
            $res['Clusters'] = [];
            if (null !== $this->clusters && \is_array($this->clusters)) {
                $n = 0;
                foreach ($this->clusters as $item) {
                    $res['Clusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $n               = 0;
                foreach ($map['Clusters'] as $item) {
                    $model->clusters[$n++] = null !== $item ? clusters::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
