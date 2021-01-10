<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\abuseResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\abuseResult\abuseOcrs\abuseOcr;
use AlibabaCloud\Tea\Model;

class abuseOcrs extends Model
{
    /**
     * @var abuseOcr[]
     */
    public $abuseOcr;
    protected $_name = [
        'abuseOcr' => 'AbuseOcr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abuseOcr) {
            $res['AbuseOcr'] = [];
            if (null !== $this->abuseOcr && \is_array($this->abuseOcr)) {
                $n = 0;
                foreach ($this->abuseOcr as $item) {
                    $res['AbuseOcr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return abuseOcrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbuseOcr'])) {
            if (!empty($map['AbuseOcr'])) {
                $model->abuseOcr = [];
                $n               = 0;
                foreach ($map['AbuseOcr'] as $item) {
                    $model->abuseOcr[$n++] = null !== $item ? abuseOcr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
