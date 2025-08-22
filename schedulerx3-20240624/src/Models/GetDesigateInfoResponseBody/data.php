<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetDesigateInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $designateType;

    /**
     * @var bool
     */
    public $transferable;
    protected $_name = [
        'designateType' => 'DesignateType',
        'transferable' => 'Transferable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
