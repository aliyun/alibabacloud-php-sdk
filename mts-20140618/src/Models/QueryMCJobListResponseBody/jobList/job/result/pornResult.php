<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult\pornAudios;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult\pornImages;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult\pornOcrs;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult\pornTexts;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult\pornVideos;
use AlibabaCloud\Tea\Model;

class pornResult extends Model
{
    /**
     * @var pornTexts
     */
    public $pornTexts;

    /**
     * @var pornVideos
     */
    public $pornVideos;

    /**
     * @var pornAudios
     */
    public $pornAudios;

    /**
     * @var pornImages
     */
    public $pornImages;

    /**
     * @var pornOcrs
     */
    public $pornOcrs;
    protected $_name = [
        'pornTexts'  => 'PornTexts',
        'pornVideos' => 'PornVideos',
        'pornAudios' => 'PornAudios',
        'pornImages' => 'PornImages',
        'pornOcrs'   => 'PornOcrs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pornTexts) {
            $res['PornTexts'] = null !== $this->pornTexts ? $this->pornTexts->toMap() : null;
        }
        if (null !== $this->pornVideos) {
            $res['PornVideos'] = null !== $this->pornVideos ? $this->pornVideos->toMap() : null;
        }
        if (null !== $this->pornAudios) {
            $res['PornAudios'] = null !== $this->pornAudios ? $this->pornAudios->toMap() : null;
        }
        if (null !== $this->pornImages) {
            $res['PornImages'] = null !== $this->pornImages ? $this->pornImages->toMap() : null;
        }
        if (null !== $this->pornOcrs) {
            $res['PornOcrs'] = null !== $this->pornOcrs ? $this->pornOcrs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pornResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PornTexts'])) {
            $model->pornTexts = pornTexts::fromMap($map['PornTexts']);
        }
        if (isset($map['PornVideos'])) {
            $model->pornVideos = pornVideos::fromMap($map['PornVideos']);
        }
        if (isset($map['PornAudios'])) {
            $model->pornAudios = pornAudios::fromMap($map['PornAudios']);
        }
        if (isset($map['PornImages'])) {
            $model->pornImages = pornImages::fromMap($map['PornImages']);
        }
        if (isset($map['PornOcrs'])) {
            $model->pornOcrs = pornOcrs::fromMap($map['PornOcrs']);
        }

        return $model;
    }
}
