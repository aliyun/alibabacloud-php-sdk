<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult\politicsAudios;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult\politicsImages;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult\politicsOcrs;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult\politicsTexts;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult\politicsVideos;
use AlibabaCloud\Tea\Model;

class politicsResult extends Model
{
    /**
     * @var politicsOcrs
     */
    public $politicsOcrs;

    /**
     * @var politicsVideos
     */
    public $politicsVideos;

    /**
     * @var politicsImages
     */
    public $politicsImages;

    /**
     * @var politicsTexts
     */
    public $politicsTexts;

    /**
     * @var politicsAudios
     */
    public $politicsAudios;
    protected $_name = [
        'politicsOcrs'   => 'PoliticsOcrs',
        'politicsVideos' => 'PoliticsVideos',
        'politicsImages' => 'PoliticsImages',
        'politicsTexts'  => 'PoliticsTexts',
        'politicsAudios' => 'PoliticsAudios',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->politicsOcrs) {
            $res['PoliticsOcrs'] = null !== $this->politicsOcrs ? $this->politicsOcrs->toMap() : null;
        }
        if (null !== $this->politicsVideos) {
            $res['PoliticsVideos'] = null !== $this->politicsVideos ? $this->politicsVideos->toMap() : null;
        }
        if (null !== $this->politicsImages) {
            $res['PoliticsImages'] = null !== $this->politicsImages ? $this->politicsImages->toMap() : null;
        }
        if (null !== $this->politicsTexts) {
            $res['PoliticsTexts'] = null !== $this->politicsTexts ? $this->politicsTexts->toMap() : null;
        }
        if (null !== $this->politicsAudios) {
            $res['PoliticsAudios'] = null !== $this->politicsAudios ? $this->politicsAudios->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return politicsResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoliticsOcrs'])) {
            $model->politicsOcrs = politicsOcrs::fromMap($map['PoliticsOcrs']);
        }
        if (isset($map['PoliticsVideos'])) {
            $model->politicsVideos = politicsVideos::fromMap($map['PoliticsVideos']);
        }
        if (isset($map['PoliticsImages'])) {
            $model->politicsImages = politicsImages::fromMap($map['PoliticsImages']);
        }
        if (isset($map['PoliticsTexts'])) {
            $model->politicsTexts = politicsTexts::fromMap($map['PoliticsTexts']);
        }
        if (isset($map['PoliticsAudios'])) {
            $model->politicsAudios = politicsAudios::fromMap($map['PoliticsAudios']);
        }

        return $model;
    }
}
