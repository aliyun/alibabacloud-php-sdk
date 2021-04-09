<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models\ReconstructThreeDMultiViewResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $pointCloudURL;
    protected $_name = [
        'pointCloudURL' => 'PointCloudURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pointCloudURL) {
            $res['PointCloudURL'] = $this->pointCloudURL;
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
        if (isset($map['PointCloudURL'])) {
            $model->pointCloudURL = $map['PointCloudURL'];
        }

        return $model;
    }
}
