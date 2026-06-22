<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class AddDatasetDataRequest extends Model
{
    /**
     * @var mixed[][]
     */
    public $dataArray;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'dataArray' => 'dataArray',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->dataArray)) {
            Model::validateArray($this->dataArray);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataArray) {
            if (\is_array($this->dataArray)) {
                $res['dataArray'] = [];
                $n1 = 0;
                foreach ($this->dataArray as $item1) {
                    if (\is_array($item1)) {
                        $res['dataArray'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['dataArray'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['dataArray'])) {
            if (!empty($map['dataArray'])) {
                $model->dataArray = [];
                $n1 = 0;
                foreach ($map['dataArray'] as $item1) {
                    if (!empty($item1)) {
                        $model->dataArray[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->dataArray[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
