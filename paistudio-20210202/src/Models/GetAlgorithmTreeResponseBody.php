<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class GetAlgorithmTreeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var mixed[][]
     */
    public $tree;
    protected $_name = [
        'requestId' => 'RequestId',
        'timestamp' => 'Timestamp',
        'tree' => 'Tree',
    ];

    public function validate()
    {
        if (\is_array($this->tree)) {
            Model::validateArray($this->tree);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->tree) {
            if (\is_array($this->tree)) {
                $res['Tree'] = [];
                $n1 = 0;
                foreach ($this->tree as $item1) {
                    if (\is_array($item1)) {
                        $res['Tree'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Tree'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Tree'])) {
            if (!empty($map['Tree'])) {
                $model->tree = [];
                $n1 = 0;
                foreach ($map['Tree'] as $item1) {
                    if (!empty($item1)) {
                        $model->tree[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->tree[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
