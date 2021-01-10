<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\abuseResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\abuseResult\abuseAudios\abuseAudio;
use AlibabaCloud\Tea\Model;

class abuseAudios extends Model
{
    /**
     * @var abuseAudio[]
     */
    public $abuseAudio;
    protected $_name = [
        'abuseAudio' => 'AbuseAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abuseAudio) {
            $res['AbuseAudio'] = [];
            if (null !== $this->abuseAudio && \is_array($this->abuseAudio)) {
                $n = 0;
                foreach ($this->abuseAudio as $item) {
                    $res['AbuseAudio'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return abuseAudios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbuseAudio'])) {
            if (!empty($map['AbuseAudio'])) {
                $model->abuseAudio = [];
                $n                 = 0;
                foreach ($map['AbuseAudio'] as $item) {
                    $model->abuseAudio[$n++] = null !== $item ? abuseAudio::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
