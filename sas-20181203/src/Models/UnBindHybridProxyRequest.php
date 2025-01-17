<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UnBindHybridProxyRequest extends Model
{
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var string[]
     */
    public $yundunUuids;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'yundunUuids' => 'YundunUuids',
    ];

    public function validate()
    {
        if (\is_array($this->yundunUuids)) {
            Model::validateArray($this->yundunUuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->yundunUuids) {
            if (\is_array($this->yundunUuids)) {
                $res['YundunUuids'] = [];
                $n1                 = 0;
                foreach ($this->yundunUuids as $item1) {
                    $res['YundunUuids'][$n1++] = $item1;
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
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['YundunUuids'])) {
            if (!empty($map['YundunUuids'])) {
                $model->yundunUuids = [];
                $n1                 = 0;
                foreach ($map['YundunUuids'] as $item1) {
                    $model->yundunUuids[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
