<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateTenantComputeEngineRequest;

use AlibabaCloud\Dara\Model;

class updateCommand extends Model
{
    /**
     * @var string[]
     */
    public $clusterUrlList;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'clusterUrlList' => 'ClusterUrlList',
        'type' => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->clusterUrlList)) {
            Model::validateArray($this->clusterUrlList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterUrlList) {
            if (\is_array($this->clusterUrlList)) {
                $res['ClusterUrlList'] = [];
                $n1 = 0;
                foreach ($this->clusterUrlList as $item1) {
                    $res['ClusterUrlList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ClusterUrlList'])) {
            if (!empty($map['ClusterUrlList'])) {
                $model->clusterUrlList = [];
                $n1 = 0;
                foreach ($map['ClusterUrlList'] as $item1) {
                    $model->clusterUrlList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
