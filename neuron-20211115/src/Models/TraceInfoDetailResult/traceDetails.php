<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models\TraceInfoDetailResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Neuron\V20211115\Models\TagEntry;
use AlibabaCloud\SDK\Neuron\V20211115\Models\TraceSpansLogEventList;

class traceDetails extends Model
{
    /**
     * @var mixed[][]
     */
    public $children;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $haveStack;

    /**
     * @var TraceSpansLogEventList[]
     */
    public $logEventList;

    /**
     * @var string
     */
    public $operationName;

    /**
     * @var string
     */
    public $parentSpanId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $rpcId;

    /**
     * @var int
     */
    public $rpcType;

    /**
     * @var string
     */
    public $rpcTypeName;

    /**
     * @var string
     */
    public $serviceIp;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $spanId;

    /**
     * @var TagEntry[]
     */
    public $tagEntryList;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'children' => 'children',
        'duration' => 'duration',
        'haveStack' => 'haveStack',
        'logEventList' => 'logEventList',
        'operationName' => 'operationName',
        'parentSpanId' => 'parentSpanId',
        'resultCode' => 'resultCode',
        'rpcId' => 'rpcId',
        'rpcType' => 'rpcType',
        'rpcTypeName' => 'rpcTypeName',
        'serviceIp' => 'serviceIp',
        'serviceName' => 'serviceName',
        'spanId' => 'spanId',
        'tagEntryList' => 'tagEntryList',
        'timestamp' => 'timestamp',
        'traceId' => 'traceId',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (\is_array($this->logEventList)) {
            Model::validateArray($this->logEventList);
        }
        if (\is_array($this->tagEntryList)) {
            Model::validateArray($this->tagEntryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    if (\is_array($item1)) {
                        $res['children'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['children'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->haveStack) {
            $res['haveStack'] = $this->haveStack;
        }

        if (null !== $this->logEventList) {
            if (\is_array($this->logEventList)) {
                $res['logEventList'] = [];
                $n1 = 0;
                foreach ($this->logEventList as $item1) {
                    $res['logEventList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operationName) {
            $res['operationName'] = $this->operationName;
        }

        if (null !== $this->parentSpanId) {
            $res['parentSpanId'] = $this->parentSpanId;
        }

        if (null !== $this->resultCode) {
            $res['resultCode'] = $this->resultCode;
        }

        if (null !== $this->rpcId) {
            $res['rpcId'] = $this->rpcId;
        }

        if (null !== $this->rpcType) {
            $res['rpcType'] = $this->rpcType;
        }

        if (null !== $this->rpcTypeName) {
            $res['rpcTypeName'] = $this->rpcTypeName;
        }

        if (null !== $this->serviceIp) {
            $res['serviceIp'] = $this->serviceIp;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->spanId) {
            $res['spanId'] = $this->spanId;
        }

        if (null !== $this->tagEntryList) {
            if (\is_array($this->tagEntryList)) {
                $res['tagEntryList'] = [];
                $n1 = 0;
                foreach ($this->tagEntryList as $item1) {
                    $res['tagEntryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
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
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['children'] as $item1) {
                    if (!empty($item1)) {
                        $model->children[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->children[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['haveStack'])) {
            $model->haveStack = $map['haveStack'];
        }

        if (isset($map['logEventList'])) {
            if (!empty($map['logEventList'])) {
                $model->logEventList = [];
                $n1 = 0;
                foreach ($map['logEventList'] as $item1) {
                    $model->logEventList[$n1] = TraceSpansLogEventList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['operationName'])) {
            $model->operationName = $map['operationName'];
        }

        if (isset($map['parentSpanId'])) {
            $model->parentSpanId = $map['parentSpanId'];
        }

        if (isset($map['resultCode'])) {
            $model->resultCode = $map['resultCode'];
        }

        if (isset($map['rpcId'])) {
            $model->rpcId = $map['rpcId'];
        }

        if (isset($map['rpcType'])) {
            $model->rpcType = $map['rpcType'];
        }

        if (isset($map['rpcTypeName'])) {
            $model->rpcTypeName = $map['rpcTypeName'];
        }

        if (isset($map['serviceIp'])) {
            $model->serviceIp = $map['serviceIp'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['spanId'])) {
            $model->spanId = $map['spanId'];
        }

        if (isset($map['tagEntryList'])) {
            if (!empty($map['tagEntryList'])) {
                $model->tagEntryList = [];
                $n1 = 0;
                foreach ($map['tagEntryList'] as $item1) {
                    $model->tagEntryList[$n1] = TagEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
