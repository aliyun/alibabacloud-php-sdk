<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListDeliveryPackageRequest extends Model
{
    /**
     * @example deliver-lP4pO6yRPqV6
     *
     * @var string
     */
    public $deliverableUID;

    /**
     * @var string
     */
    public $platform;
    protected $_name = [
        'deliverableUID' => 'deliverableUID',
        'platform'       => 'platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverableUID) {
            $res['deliverableUID'] = $this->deliverableUID;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeliveryPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deliverableUID'])) {
            $model->deliverableUID = $map['deliverableUID'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        return $model;
    }
}
