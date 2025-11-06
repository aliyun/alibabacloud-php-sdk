<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ClusterSpec extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var DataSource[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $image;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'dataSources' => 'DataSources',
        'image' => 'Image',
    ];

    public function validate()
    {
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['DataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['DataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1] = DataSource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        return $model;
    }
}
