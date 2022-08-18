<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponseBody\flushCacheResults;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponseBody\flushCacheResults\dnsNodes\answers;
use AlibabaCloud\Tea\Model;

class dnsNodes extends Model
{
    /**
     * @var answers[]
     */
    public $answers;

    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var string
     */
    public $spName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'answers' => 'Answers',
        'nodeIp'  => 'NodeIp',
        'spName'  => 'SpName',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answers) {
            $res['Answers'] = [];
            if (null !== $this->answers && \is_array($this->answers)) {
                $n = 0;
                foreach ($this->answers as $item) {
                    $res['Answers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->spName) {
            $res['SpName'] = $this->spName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answers'])) {
            if (!empty($map['Answers'])) {
                $model->answers = [];
                $n              = 0;
                foreach ($map['Answers'] as $item) {
                    $model->answers[$n++] = null !== $item ? answers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['SpName'])) {
            $model->spName = $map['SpName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
