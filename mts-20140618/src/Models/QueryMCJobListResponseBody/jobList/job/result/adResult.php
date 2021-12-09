<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult\adAudios;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult\adImages;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult\adOcrs;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult\adTexts;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult\adVideos;
use AlibabaCloud\Tea\Model;

class adResult extends Model
{
    /**
     * @var adAudios
     */
    public $adAudios;

    /**
     * @var adImages
     */
    public $adImages;

    /**
     * @var adOcrs
     */
    public $adOcrs;

    /**
     * @var adTexts
     */
    public $adTexts;

    /**
     * @var adVideos
     */
    public $adVideos;
    protected $_name = [
        'adAudios' => 'AdAudios',
        'adImages' => 'AdImages',
        'adOcrs'   => 'AdOcrs',
        'adTexts'  => 'AdTexts',
        'adVideos' => 'AdVideos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adAudios) {
            $res['AdAudios'] = null !== $this->adAudios ? $this->adAudios->toMap() : null;
        }
        if (null !== $this->adImages) {
            $res['AdImages'] = null !== $this->adImages ? $this->adImages->toMap() : null;
        }
        if (null !== $this->adOcrs) {
            $res['AdOcrs'] = null !== $this->adOcrs ? $this->adOcrs->toMap() : null;
        }
        if (null !== $this->adTexts) {
            $res['AdTexts'] = null !== $this->adTexts ? $this->adTexts->toMap() : null;
        }
        if (null !== $this->adVideos) {
            $res['AdVideos'] = null !== $this->adVideos ? $this->adVideos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdAudios'])) {
            $model->adAudios = adAudios::fromMap($map['AdAudios']);
        }
        if (isset($map['AdImages'])) {
            $model->adImages = adImages::fromMap($map['AdImages']);
        }
        if (isset($map['AdOcrs'])) {
            $model->adOcrs = adOcrs::fromMap($map['AdOcrs']);
        }
        if (isset($map['AdTexts'])) {
            $model->adTexts = adTexts::fromMap($map['AdTexts']);
        }
        if (isset($map['AdVideos'])) {
            $model->adVideos = adVideos::fromMap($map['AdVideos']);
        }

        return $model;
    }
}
