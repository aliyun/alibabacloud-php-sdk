<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsResponseBody\domainLogs\domainLog;
use AlibabaCloud\Tea\Model;

class domainLogs extends Model
{
    /**
     * @var domainLog[]
     */
    public $domainLog;
    protected $_name = [
        'domainLog' => 'DomainLog',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainLog) {
            $res['DomainLog'] = [];
            if (null !== $this->domainLog && \is_array($this->domainLog)) {
                $n = 0;
                foreach ($this->domainLog as $item) {
                    $res['DomainLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainLog'])) {
            if (!empty($map['DomainLog'])) {
                $model->domainLog = [];
                $n = 0;
                foreach ($map['DomainLog'] as $item) {
                    $model->domainLog[$n++] = null !== $item ? domainLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
