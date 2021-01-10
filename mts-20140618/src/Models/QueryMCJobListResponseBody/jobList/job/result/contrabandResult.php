<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult\contrabandAudios;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult\contrabandOcrs;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult\contrabandTexts;
use AlibabaCloud\Tea\Model;

class contrabandResult extends Model
{
    /**
     * @var contrabandAudios
     */
    public $contrabandAudios;

    /**
     * @var contrabandOcrs
     */
    public $contrabandOcrs;

    /**
     * @var contrabandTexts
     */
    public $contrabandTexts;
    protected $_name = [
        'contrabandAudios' => 'ContrabandAudios',
        'contrabandOcrs'   => 'ContrabandOcrs',
        'contrabandTexts'  => 'ContrabandTexts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contrabandAudios) {
            $res['ContrabandAudios'] = null !== $this->contrabandAudios ? $this->contrabandAudios->toMap() : null;
        }
        if (null !== $this->contrabandOcrs) {
            $res['ContrabandOcrs'] = null !== $this->contrabandOcrs ? $this->contrabandOcrs->toMap() : null;
        }
        if (null !== $this->contrabandTexts) {
            $res['ContrabandTexts'] = null !== $this->contrabandTexts ? $this->contrabandTexts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contrabandResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContrabandAudios'])) {
            $model->contrabandAudios = contrabandAudios::fromMap($map['ContrabandAudios']);
        }
        if (isset($map['ContrabandOcrs'])) {
            $model->contrabandOcrs = contrabandOcrs::fromMap($map['ContrabandOcrs']);
        }
        if (isset($map['ContrabandTexts'])) {
            $model->contrabandTexts = contrabandTexts::fromMap($map['ContrabandTexts']);
        }

        return $model;
    }
}
