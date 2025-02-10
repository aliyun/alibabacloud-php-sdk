<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponseBody\flushCacheResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponseBody\flushCacheResults\dnsNodes\answers;

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
        if (\is_array($this->answers)) {
            Model::validateArray($this->answers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answers) {
            if (\is_array($this->answers)) {
                $res['Answers'] = [];
                $n1             = 0;
                foreach ($this->answers as $item1) {
                    $res['Answers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answers'])) {
            if (!empty($map['Answers'])) {
                $model->answers = [];
                $n1             = 0;
                foreach ($map['Answers'] as $item1) {
                    $model->answers[$n1++] = answers::fromMap($item1);
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
