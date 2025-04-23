<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsResponseBody\domainLogs\domainLog;

class domainLogs extends Model
{
    /**
     * @var domainLog[]
     */
    public $domainLog;
    protected $_name = [
        'domainLog' => 'DomainLog',
    ];

    public function validate()
    {
        if (\is_array($this->domainLog)) {
            Model::validateArray($this->domainLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainLog) {
            if (\is_array($this->domainLog)) {
                $res['DomainLog'] = [];
                $n1 = 0;
                foreach ($this->domainLog as $item1) {
                    $res['DomainLog'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainLog'])) {
            if (!empty($map['DomainLog'])) {
                $model->domainLog = [];
                $n1 = 0;
                foreach ($map['DomainLog'] as $item1) {
                    $model->domainLog[$n1++] = domainLog::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
