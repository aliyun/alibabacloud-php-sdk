<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeliveryInstanceRequest extends Model
{
    /**
     * @example deliver-cfg-Y5lx8QmLLp9O
     *
     * @var string
     */
    public $deliverableConfigUID;

    /**
     * @example deliver-ppAzK3r8nvVp
     *
     * @var string
     */
    public $deliverableUID;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'deliverableConfigUID' => 'deliverableConfigUID',
        'deliverableUID'       => 'deliverableUID',
        'desc'                 => 'desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverableConfigUID) {
            $res['deliverableConfigUID'] = $this->deliverableConfigUID;
        }
        if (null !== $this->deliverableUID) {
            $res['deliverableUID'] = $this->deliverableUID;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeliveryInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deliverableConfigUID'])) {
            $model->deliverableConfigUID = $map['deliverableConfigUID'];
        }
        if (isset($map['deliverableUID'])) {
            $model->deliverableUID = $map['deliverableUID'];
        }
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        return $model;
    }
}
