<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataResponseBody\result\headers;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataResponseBody\result\valuesV2;

class result extends Model
{
    /**
     * @var headers[]
     */
    public $headers;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var mixed[][]
     */
    public $values;

    /**
     * @var valuesV2[]
     */
    public $valuesV2;
    protected $_name = [
        'headers' => 'Headers',
        'sql' => 'Sql',
        'values' => 'Values',
        'valuesV2' => 'ValuesV2',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        if (\is_array($this->valuesV2)) {
            Model::validateArray($this->valuesV2);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                $n1 = 0;
                foreach ($this->headers as $item1) {
                    $res['Headers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    if (\is_array($item1)) {
                        $res['Values'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Values'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->valuesV2) {
            if (\is_array($this->valuesV2)) {
                $res['ValuesV2'] = [];
                $n1 = 0;
                foreach ($this->valuesV2 as $item1) {
                    $res['ValuesV2'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n1 = 0;
                foreach ($map['Headers'] as $item1) {
                    $model->headers[$n1] = headers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    if (!empty($item1)) {
                        $model->values[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->values[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ValuesV2'])) {
            if (!empty($map['ValuesV2'])) {
                $model->valuesV2 = [];
                $n1 = 0;
                foreach ($map['ValuesV2'] as $item1) {
                    $model->valuesV2[$n1] = valuesV2::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
