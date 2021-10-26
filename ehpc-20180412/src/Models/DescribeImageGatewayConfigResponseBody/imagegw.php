<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigResponseBody\imagegw\locations;
use AlibabaCloud\Tea\Model;

class imagegw extends Model
{
    /**
     * @var string
     */
    public $defaultImageLocation;

    /**
     * @var string
     */
    public $imageExpirationTimeout;

    /**
     * @var locations
     */
    public $locations;

    /**
     * @var string
     */
    public $mongoDBURI;

    /**
     * @var int
     */
    public $pullUpdateTimeout;

    /**
     * @var string
     */
    public $updateDateTime;
    protected $_name = [
        'defaultImageLocation'   => 'DefaultImageLocation',
        'imageExpirationTimeout' => 'ImageExpirationTimeout',
        'locations'              => 'Locations',
        'mongoDBURI'             => 'MongoDBURI',
        'pullUpdateTimeout'      => 'PullUpdateTimeout',
        'updateDateTime'         => 'UpdateDateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultImageLocation) {
            $res['DefaultImageLocation'] = $this->defaultImageLocation;
        }
        if (null !== $this->imageExpirationTimeout) {
            $res['ImageExpirationTimeout'] = $this->imageExpirationTimeout;
        }
        if (null !== $this->locations) {
            $res['Locations'] = null !== $this->locations ? $this->locations->toMap() : null;
        }
        if (null !== $this->mongoDBURI) {
            $res['MongoDBURI'] = $this->mongoDBURI;
        }
        if (null !== $this->pullUpdateTimeout) {
            $res['PullUpdateTimeout'] = $this->pullUpdateTimeout;
        }
        if (null !== $this->updateDateTime) {
            $res['UpdateDateTime'] = $this->updateDateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imagegw
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultImageLocation'])) {
            $model->defaultImageLocation = $map['DefaultImageLocation'];
        }
        if (isset($map['ImageExpirationTimeout'])) {
            $model->imageExpirationTimeout = $map['ImageExpirationTimeout'];
        }
        if (isset($map['Locations'])) {
            $model->locations = locations::fromMap($map['Locations']);
        }
        if (isset($map['MongoDBURI'])) {
            $model->mongoDBURI = $map['MongoDBURI'];
        }
        if (isset($map['PullUpdateTimeout'])) {
            $model->pullUpdateTimeout = $map['PullUpdateTimeout'];
        }
        if (isset($map['UpdateDateTime'])) {
            $model->updateDateTime = $map['UpdateDateTime'];
        }

        return $model;
    }
}
