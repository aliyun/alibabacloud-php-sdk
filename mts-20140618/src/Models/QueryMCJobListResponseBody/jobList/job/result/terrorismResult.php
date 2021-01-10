<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismAudios;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismImages;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismOcrs;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismTexts;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismVideos;
use AlibabaCloud\Tea\Model;

class terrorismResult extends Model
{
    /**
     * @var terrorismOcrs
     */
    public $terrorismOcrs;

    /**
     * @var terrorismAudios
     */
    public $terrorismAudios;

    /**
     * @var terrorismVideos
     */
    public $terrorismVideos;

    /**
     * @var terrorismTexts
     */
    public $terrorismTexts;

    /**
     * @var terrorismImages
     */
    public $terrorismImages;
    protected $_name = [
        'terrorismOcrs'   => 'TerrorismOcrs',
        'terrorismAudios' => 'TerrorismAudios',
        'terrorismVideos' => 'TerrorismVideos',
        'terrorismTexts'  => 'TerrorismTexts',
        'terrorismImages' => 'TerrorismImages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terrorismOcrs) {
            $res['TerrorismOcrs'] = null !== $this->terrorismOcrs ? $this->terrorismOcrs->toMap() : null;
        }
        if (null !== $this->terrorismAudios) {
            $res['TerrorismAudios'] = null !== $this->terrorismAudios ? $this->terrorismAudios->toMap() : null;
        }
        if (null !== $this->terrorismVideos) {
            $res['TerrorismVideos'] = null !== $this->terrorismVideos ? $this->terrorismVideos->toMap() : null;
        }
        if (null !== $this->terrorismTexts) {
            $res['TerrorismTexts'] = null !== $this->terrorismTexts ? $this->terrorismTexts->toMap() : null;
        }
        if (null !== $this->terrorismImages) {
            $res['TerrorismImages'] = null !== $this->terrorismImages ? $this->terrorismImages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerrorismOcrs'])) {
            $model->terrorismOcrs = terrorismOcrs::fromMap($map['TerrorismOcrs']);
        }
        if (isset($map['TerrorismAudios'])) {
            $model->terrorismAudios = terrorismAudios::fromMap($map['TerrorismAudios']);
        }
        if (isset($map['TerrorismVideos'])) {
            $model->terrorismVideos = terrorismVideos::fromMap($map['TerrorismVideos']);
        }
        if (isset($map['TerrorismTexts'])) {
            $model->terrorismTexts = terrorismTexts::fromMap($map['TerrorismTexts']);
        }
        if (isset($map['TerrorismImages'])) {
            $model->terrorismImages = terrorismImages::fromMap($map['TerrorismImages']);
        }

        return $model;
    }
}
