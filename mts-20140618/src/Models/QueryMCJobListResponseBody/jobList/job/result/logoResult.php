<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\logoResult\logoImages;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\logoResult\logoVideos;
use AlibabaCloud\Tea\Model;

class logoResult extends Model
{
    /**
     * @var logoImages
     */
    public $logoImages;

    /**
     * @var logoVideos
     */
    public $logoVideos;
    protected $_name = [
        'logoImages' => 'LogoImages',
        'logoVideos' => 'LogoVideos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoImages) {
            $res['LogoImages'] = null !== $this->logoImages ? $this->logoImages->toMap() : null;
        }
        if (null !== $this->logoVideos) {
            $res['LogoVideos'] = null !== $this->logoVideos ? $this->logoVideos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logoResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogoImages'])) {
            $model->logoImages = logoImages::fromMap($map['LogoImages']);
        }
        if (isset($map['LogoVideos'])) {
            $model->logoVideos = logoVideos::fromMap($map['LogoVideos']);
        }

        return $model;
    }
}
