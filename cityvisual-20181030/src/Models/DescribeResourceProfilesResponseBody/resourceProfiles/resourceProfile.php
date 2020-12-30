<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeResourceProfilesResponseBody\resourceProfiles;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeResourceProfilesResponseBody\resourceProfiles\resourceProfile\resourceProfileParams;
use AlibabaCloud\Tea\Model;

class resourceProfile extends Model
{
    /**
     * @var string
     */
    public $resourceProfileName;

    /**
     * @var string
     */
    public $resourceProfileId;

    /**
     * @var resourceProfileParams
     */
    public $resourceProfileParams;
    protected $_name = [
        'resourceProfileName'   => 'ResourceProfileName',
        'resourceProfileId'     => 'ResourceProfileId',
        'resourceProfileParams' => 'ResourceProfileParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceProfileName) {
            $res['ResourceProfileName'] = $this->resourceProfileName;
        }
        if (null !== $this->resourceProfileId) {
            $res['ResourceProfileId'] = $this->resourceProfileId;
        }
        if (null !== $this->resourceProfileParams) {
            $res['ResourceProfileParams'] = null !== $this->resourceProfileParams ? $this->resourceProfileParams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceProfile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceProfileName'])) {
            $model->resourceProfileName = $map['ResourceProfileName'];
        }
        if (isset($map['ResourceProfileId'])) {
            $model->resourceProfileId = $map['ResourceProfileId'];
        }
        if (isset($map['ResourceProfileParams'])) {
            $model->resourceProfileParams = resourceProfileParams::fromMap($map['ResourceProfileParams']);
        }

        return $model;
    }
}
