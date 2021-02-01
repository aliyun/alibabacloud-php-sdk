<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateMonocularImageDepthResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $depthMapUrl;

    /**
     * @var string
     */
    public $depthToColorUrl;
    protected $_name = [
        'depthMapUrl'     => 'DepthMapUrl',
        'depthToColorUrl' => 'DepthToColorUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depthMapUrl) {
            $res['DepthMapUrl'] = $this->depthMapUrl;
        }
        if (null !== $this->depthToColorUrl) {
            $res['DepthToColorUrl'] = $this->depthToColorUrl;
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
        if (isset($map['DepthMapUrl'])) {
            $model->depthMapUrl = $map['DepthMapUrl'];
        }
        if (isset($map['DepthToColorUrl'])) {
            $model->depthToColorUrl = $map['DepthToColorUrl'];
        }

        return $model;
    }
}
