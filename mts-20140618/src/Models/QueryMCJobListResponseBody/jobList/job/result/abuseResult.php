<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\abuseResult\abuseAudios;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\abuseResult\abuseOcrs;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\abuseResult\abuseTexts;
use AlibabaCloud\Tea\Model;

class abuseResult extends Model
{
    /**
     * @var abuseAudios
     */
    public $abuseAudios;

    /**
     * @var abuseOcrs
     */
    public $abuseOcrs;

    /**
     * @var abuseTexts
     */
    public $abuseTexts;
    protected $_name = [
        'abuseAudios' => 'AbuseAudios',
        'abuseOcrs'   => 'AbuseOcrs',
        'abuseTexts'  => 'AbuseTexts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abuseAudios) {
            $res['AbuseAudios'] = null !== $this->abuseAudios ? $this->abuseAudios->toMap() : null;
        }
        if (null !== $this->abuseOcrs) {
            $res['AbuseOcrs'] = null !== $this->abuseOcrs ? $this->abuseOcrs->toMap() : null;
        }
        if (null !== $this->abuseTexts) {
            $res['AbuseTexts'] = null !== $this->abuseTexts ? $this->abuseTexts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return abuseResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbuseAudios'])) {
            $model->abuseAudios = abuseAudios::fromMap($map['AbuseAudios']);
        }
        if (isset($map['AbuseOcrs'])) {
            $model->abuseOcrs = abuseOcrs::fromMap($map['AbuseOcrs']);
        }
        if (isset($map['AbuseTexts'])) {
            $model->abuseTexts = abuseTexts::fromMap($map['AbuseTexts']);
        }

        return $model;
    }
}
