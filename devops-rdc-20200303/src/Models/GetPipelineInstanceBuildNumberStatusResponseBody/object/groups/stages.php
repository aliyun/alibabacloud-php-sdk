<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceBuildNumberStatusResponseBody\object\groups;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceBuildNumberStatusResponseBody\object\groups\stages\components;
use AlibabaCloud\Tea\Model;

class stages extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var components[]
     */
    public $components;
    protected $_name = [
        'status'     => 'Status',
        'sign'       => 'Sign',
        'components' => 'Components',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->components) {
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
