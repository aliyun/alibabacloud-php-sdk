<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class UpdateBandwidthPackageResponseBody extends Model
{
    /**
     * @description The bandwidth plan ID.
     *
     * @example gbwp-bp1eo4f57z1kbbcmn****
     *
     * @var string
     */
    public $bandwidthPackage;

    /**
     * @description The description of the bandwidth plan.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the bandwidth plan.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 1DF3A3CB-B621-44F8-9870-C20D034D7AB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bandwidthPackage' => 'BandwidthPackage',
        'description'      => 'Description',
        'name'             => 'Name',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackage) {
            $res['BandwidthPackage'] = $this->bandwidthPackage;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBandwidthPackageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackage'])) {
            $model->bandwidthPackage = $map['BandwidthPackage'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
