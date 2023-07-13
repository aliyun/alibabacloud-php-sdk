<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateClusterVolumesRequest\additionalVolumes;
use AlibabaCloud\Tea\Model;

class UpdateClusterVolumesRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to UpdateClusterVolumes
     *
     * @var additionalVolumes[]
     */
    public $additionalVolumes;

    /**
     * @description The ID of the request.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'additionalVolumes' => 'AdditionalVolumes',
        'clusterId'         => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalVolumes) {
            $res['AdditionalVolumes'] = [];
            if (null !== $this->additionalVolumes && \is_array($this->additionalVolumes)) {
                $n = 0;
                foreach ($this->additionalVolumes as $item) {
                    $res['AdditionalVolumes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClusterVolumesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalVolumes'])) {
            if (!empty($map['AdditionalVolumes'])) {
                $model->additionalVolumes = [];
                $n                        = 0;
                foreach ($map['AdditionalVolumes'] as $item) {
                    $model->additionalVolumes[$n++] = null !== $item ? additionalVolumes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
