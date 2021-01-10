<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\spamResult\spamAudios;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\spamResult\spamOcrs;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\spamResult\spamTexts;
use AlibabaCloud\Tea\Model;

class spamResult extends Model
{
    /**
     * @var spamTexts
     */
    public $spamTexts;

    /**
     * @var spamAudios
     */
    public $spamAudios;

    /**
     * @var spamOcrs
     */
    public $spamOcrs;
    protected $_name = [
        'spamTexts'  => 'SpamTexts',
        'spamAudios' => 'SpamAudios',
        'spamOcrs'   => 'SpamOcrs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spamTexts) {
            $res['SpamTexts'] = null !== $this->spamTexts ? $this->spamTexts->toMap() : null;
        }
        if (null !== $this->spamAudios) {
            $res['SpamAudios'] = null !== $this->spamAudios ? $this->spamAudios->toMap() : null;
        }
        if (null !== $this->spamOcrs) {
            $res['SpamOcrs'] = null !== $this->spamOcrs ? $this->spamOcrs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spamResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpamTexts'])) {
            $model->spamTexts = spamTexts::fromMap($map['SpamTexts']);
        }
        if (isset($map['SpamAudios'])) {
            $model->spamAudios = spamAudios::fromMap($map['SpamAudios']);
        }
        if (isset($map['SpamOcrs'])) {
            $model->spamOcrs = spamOcrs::fromMap($map['SpamOcrs']);
        }

        return $model;
    }
}
