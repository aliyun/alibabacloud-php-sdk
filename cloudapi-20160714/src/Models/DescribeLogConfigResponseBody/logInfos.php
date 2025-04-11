<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponseBody\logInfos\logInfo;

class logInfos extends Model
{
    /**
     * @var logInfo[]
     */
    public $logInfo;
    protected $_name = [
        'logInfo' => 'LogInfo',
    ];

    public function validate()
    {
        if (\is_array($this->logInfo)) {
            Model::validateArray($this->logInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logInfo) {
            if (\is_array($this->logInfo)) {
                $res['LogInfo'] = [];
                $n1 = 0;
                foreach ($this->logInfo as $item1) {
                    $res['LogInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LogInfo'])) {
            if (!empty($map['LogInfo'])) {
                $model->logInfo = [];
                $n1 = 0;
                foreach ($map['LogInfo'] as $item1) {
                    $model->logInfo[$n1++] = logInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
