<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorResultsResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorResultsResponseBody\data\tmMonitorResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var tmMonitorResult[]
     */
    public $tmMonitorResult;
    protected $_name = [
        'tmMonitorResult' => 'TmMonitorResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tmMonitorResult) {
            $res['TmMonitorResult'] = [];
            if (null !== $this->tmMonitorResult && \is_array($this->tmMonitorResult)) {
                $n = 0;
                foreach ($this->tmMonitorResult as $item) {
                    $res['TmMonitorResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TmMonitorResult'])) {
            if (!empty($map['TmMonitorResult'])) {
                $model->tmMonitorResult = [];
                $n                      = 0;
                foreach ($map['TmMonitorResult'] as $item) {
                    $model->tmMonitorResult[$n++] = null !== $item ? tmMonitorResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
