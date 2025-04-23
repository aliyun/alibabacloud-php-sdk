<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateClusterVolumesRequest\additionalVolumes;

class UpdateClusterVolumesRequest extends Model
{
    /**
     * @var additionalVolumes[]
     */
    public $additionalVolumes;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'additionalVolumes' => 'AdditionalVolumes',
        'clusterId' => 'ClusterId',
    ];

    public function validate()
    {
        if (\is_array($this->additionalVolumes)) {
            Model::validateArray($this->additionalVolumes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalVolumes) {
            if (\is_array($this->additionalVolumes)) {
                $res['AdditionalVolumes'] = [];
                $n1 = 0;
                foreach ($this->additionalVolumes as $item1) {
                    $res['AdditionalVolumes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['AdditionalVolumes'])) {
            if (!empty($map['AdditionalVolumes'])) {
                $model->additionalVolumes = [];
                $n1 = 0;
                foreach ($map['AdditionalVolumes'] as $item1) {
                    $model->additionalVolumes[$n1++] = additionalVolumes::fromMap($item1);
                }
            }
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
