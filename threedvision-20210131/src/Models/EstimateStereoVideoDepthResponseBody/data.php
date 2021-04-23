<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateStereoVideoDepthResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $depthUrl;

    /**
     * @var string
     */
    public $depthVisUrl;
    protected $_name = [
        'depthUrl'    => 'DepthUrl',
        'depthVisUrl' => 'DepthVisUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depthUrl) {
            $res['DepthUrl'] = $this->depthUrl;
        }
        if (null !== $this->depthVisUrl) {
            $res['DepthVisUrl'] = $this->depthVisUrl;
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
        if (isset($map['DepthUrl'])) {
            $model->depthUrl = $map['DepthUrl'];
        }
        if (isset($map['DepthVisUrl'])) {
            $model->depthVisUrl = $map['DepthVisUrl'];
        }

        return $model;
    }
}
