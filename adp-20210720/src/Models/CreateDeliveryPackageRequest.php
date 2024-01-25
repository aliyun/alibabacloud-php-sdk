<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class CreateDeliveryPackageRequest extends Model
{
    /**
     * @example deliver-PKYgLx7l6VOA
     *
     * @var string
     */
    public $deliverableUID;

    /**
     * @var string
     */
    public $deliveryInstanceUID;

    /**
     * @example delivery-pkg-rqYQp1Y4rNXg
     *
     * @var string
     */
    public $originDeliverableUID;

    /**
     * @example all
     *
     * @var string
     */
    public $packageContentType;

    /**
     * @example full
     *
     * @var string
     */
    public $packageType;

    /**
     * @example linux/amd64
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'deliverableUID'       => 'deliverableUID',
        'deliveryInstanceUID'  => 'deliveryInstanceUID',
        'originDeliverableUID' => 'originDeliverableUID',
        'packageContentType'   => 'packageContentType',
        'packageType'          => 'packageType',
        'platform'             => 'platform',
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
        if (null !== $this->deliveryInstanceUID) {
            $res['deliveryInstanceUID'] = $this->deliveryInstanceUID;
        }
        if (null !== $this->originDeliverableUID) {
            $res['originDeliverableUID'] = $this->originDeliverableUID;
        }
        if (null !== $this->packageContentType) {
            $res['packageContentType'] = $this->packageContentType;
        }
        if (null !== $this->packageType) {
            $res['packageType'] = $this->packageType;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeliveryPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deliverableUID'])) {
            $model->deliverableUID = $map['deliverableUID'];
        }
        if (isset($map['deliveryInstanceUID'])) {
            $model->deliveryInstanceUID = $map['deliveryInstanceUID'];
        }
        if (isset($map['originDeliverableUID'])) {
            $model->originDeliverableUID = $map['originDeliverableUID'];
        }
        if (isset($map['packageContentType'])) {
            $model->packageContentType = $map['packageContentType'];
        }
        if (isset($map['packageType'])) {
            $model->packageType = $map['packageType'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        return $model;
    }
}
