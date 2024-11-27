<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetDesigateInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $designateType;

    /**
     * @example true
     *
     * @var bool
     */
    public $transferable;
    protected $_name = [
        'designateType' => 'DesignateType',
        'transferable'  => 'Transferable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->designateType) {
            $res['DesignateType'] = $this->designateType;
        }
        if (null !== $this->transferable) {
            $res['Transferable'] = $this->transferable;
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
        if (isset($map['DesignateType'])) {
            $model->designateType = $map['DesignateType'];
        }
        if (isset($map['Transferable'])) {
            $model->transferable = $map['Transferable'];
        }

        return $model;
    }
}
