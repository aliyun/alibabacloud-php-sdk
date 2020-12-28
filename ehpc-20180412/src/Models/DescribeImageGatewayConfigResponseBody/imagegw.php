<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigResponseBody\imagegw\locations;
use AlibabaCloud\Tea\Model;

class imagegw extends Model
{
    /**
     * @var locations[]
     */
    public $locations;

    /**
     * @var string
     */
    public $updateDateTime;

    /**
     * @var string
     */
    public $imageExpirationTimeout;

    /**
     * @var string
     */
    public $mongoDBURI;

    /**
     * @var string
     */
    public $defaultImageLocation;

    /**
     * @var int
     */
    public $pullUpdateTimeout;
    protected $_name = [
        'locations'              => 'Locations',
        'updateDateTime'         => 'UpdateDateTime',
        'imageExpirationTimeout' => 'ImageExpirationTimeout',
        'mongoDBURI'             => 'MongoDBURI',
        'defaultImageLocation'   => 'DefaultImageLocation',
        'pullUpdateTimeout'      => 'PullUpdateTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locations) {
            $res['Locations'] = [];
            if (null !== $this->locations && \is_array($this->locations)) {
                $n = 0;
                foreach ($this->locations as $item) {
                    $res['Locations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateDateTime) {
            $res['UpdateDateTime'] = $this->updateDateTime;
        }
        if (null !== $this->imageExpirationTimeout) {
            $res['ImageExpirationTimeout'] = $this->imageExpirationTimeout;
        }
        if (null !== $this->mongoDBURI) {
            $res['MongoDBURI'] = $this->mongoDBURI;
        }
        if (null !== $this->defaultImageLocation) {
            $res['DefaultImageLocation'] = $this->defaultImageLocation;
        }
        if (null !== $this->pullUpdateTimeout) {
            $res['PullUpdateTimeout'] = $this->pullUpdateTimeout;
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
        if (isset($map['Locations'])) {
            if (!empty($map['Locations'])) {
                $model->locations = [];
                $n                = 0;
                foreach ($map['Locations'] as $item) {
                    $model->locations[$n++] = null !== $item ? locations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateDateTime'])) {
            $model->updateDateTime = $map['UpdateDateTime'];
        }
        if (isset($map['ImageExpirationTimeout'])) {
            $model->imageExpirationTimeout = $map['ImageExpirationTimeout'];
        }
        if (isset($map['MongoDBURI'])) {
            $model->mongoDBURI = $map['MongoDBURI'];
        }
        if (isset($map['DefaultImageLocation'])) {
            $model->defaultImageLocation = $map['DefaultImageLocation'];
        }
        if (isset($map['PullUpdateTimeout'])) {
            $model->pullUpdateTimeout = $map['PullUpdateTimeout'];
        }

        return $model;
    }
}
