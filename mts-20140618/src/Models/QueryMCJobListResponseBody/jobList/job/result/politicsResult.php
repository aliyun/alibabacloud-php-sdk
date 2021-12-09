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
     * @var politicsAudios
     */
    public $politicsAudios;

    /**
     * @var politicsImages
     */
    public $politicsImages;

    /**
     * @var politicsOcrs
     */
    public $politicsOcrs;

    /**
     * @var politicsTexts
     */
    public $politicsTexts;

    /**
     * @var politicsVideos
     */
    public $politicsVideos;
    protected $_name = [
        'politicsAudios' => 'PoliticsAudios',
        'politicsImages' => 'PoliticsImages',
        'politicsOcrs'   => 'PoliticsOcrs',
        'politicsTexts'  => 'PoliticsTexts',
        'politicsVideos' => 'PoliticsVideos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->politicsAudios) {
            $res['PoliticsAudios'] = null !== $this->politicsAudios ? $this->politicsAudios->toMap() : null;
        }
        if (null !== $this->politicsImages) {
            $res['PoliticsImages'] = null !== $this->politicsImages ? $this->politicsImages->toMap() : null;
        }
        if (null !== $this->politicsOcrs) {
            $res['PoliticsOcrs'] = null !== $this->politicsOcrs ? $this->politicsOcrs->toMap() : null;
        }
        if (null !== $this->politicsTexts) {
            $res['PoliticsTexts'] = null !== $this->politicsTexts ? $this->politicsTexts->toMap() : null;
        }
        if (null !== $this->politicsVideos) {
            $res['PoliticsVideos'] = null !== $this->politicsVideos ? $this->politicsVideos->toMap() : null;
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
        if (isset($map['PoliticsAudios'])) {
            $model->politicsAudios = politicsAudios::fromMap($map['PoliticsAudios']);
        }
        if (isset($map['PoliticsImages'])) {
            $model->politicsImages = politicsImages::fromMap($map['PoliticsImages']);
        }
        if (isset($map['PoliticsOcrs'])) {
            $model->politicsOcrs = politicsOcrs::fromMap($map['PoliticsOcrs']);
        }
        if (isset($map['PoliticsTexts'])) {
            $model->politicsTexts = politicsTexts::fromMap($map['PoliticsTexts']);
        }
        if (isset($map['PoliticsVideos'])) {
            $model->politicsVideos = politicsVideos::fromMap($map['PoliticsVideos']);
        }

        return $model;
    }
}
