<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListDeliveryPackageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example deliver-5MRxYz00PvMk
     *
     * @var string
     */
    public $deliverableUID;

    /**
     * @example deliver-ovAgJx80B9ZV
     *
     * @var string
     */
    public $originDeliverableUID;

    /**
     * @example application
     *
     * @var string
     */
    public $packageContentType;

    /**
     * @example 3.97GB
     *
     * @var string
     */
    public $packageSize;

    /**
     * @example Success
     *
     * @var string
     */
    public $packageStatus;

    /**
     * @example full
     *
     * @var string
     */
    public $packageType;

    /**
     * @example 1c33e7b7-2df8-4632-9f94-e1d98caa410d
     *
     * @var string
     */
    public $packageUID;

    /**
     * @example https://cn-shanghai-cnx-packages.oss-cn-shanghai.aliyuncs.com/products/xxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $packageURL;

    /**
     * @example linux/amd64
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'deliverableUID'       => 'deliverableUID',
        'originDeliverableUID' => 'originDeliverableUID',
        'packageContentType'   => 'packageContentType',
        'packageSize'          => 'packageSize',
        'packageStatus'        => 'packageStatus',
        'packageType'          => 'packageType',
        'packageUID'           => 'packageUID',
        'packageURL'           => 'packageURL',
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
        if (null !== $this->originDeliverableUID) {
            $res['originDeliverableUID'] = $this->originDeliverableUID;
        }
        if (null !== $this->packageContentType) {
            $res['packageContentType'] = $this->packageContentType;
        }
        if (null !== $this->packageSize) {
            $res['packageSize'] = $this->packageSize;
        }
        if (null !== $this->packageStatus) {
            $res['packageStatus'] = $this->packageStatus;
        }
        if (null !== $this->packageType) {
            $res['packageType'] = $this->packageType;
        }
        if (null !== $this->packageUID) {
            $res['packageUID'] = $this->packageUID;
        }
        if (null !== $this->packageURL) {
            $res['packageURL'] = $this->packageURL;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
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
        if (isset($map['deliverableUID'])) {
            $model->deliverableUID = $map['deliverableUID'];
        }
        if (isset($map['originDeliverableUID'])) {
            $model->originDeliverableUID = $map['originDeliverableUID'];
        }
        if (isset($map['packageContentType'])) {
            $model->packageContentType = $map['packageContentType'];
        }
        if (isset($map['packageSize'])) {
            $model->packageSize = $map['packageSize'];
        }
        if (isset($map['packageStatus'])) {
            $model->packageStatus = $map['packageStatus'];
        }
        if (isset($map['packageType'])) {
            $model->packageType = $map['packageType'];
        }
        if (isset($map['packageUID'])) {
            $model->packageUID = $map['packageUID'];
        }
        if (isset($map['packageURL'])) {
            $model->packageURL = $map['packageURL'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        return $model;
    }
}
