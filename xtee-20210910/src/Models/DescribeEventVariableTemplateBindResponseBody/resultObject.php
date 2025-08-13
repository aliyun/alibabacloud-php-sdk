<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateBindResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateBindResponseBody\resultObject\chargeVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateBindResponseBody\resultObject\freeVariables;

class resultObject extends Model
{
    /**
     * @var chargeVariables[]
     */
    public $chargeVariables;

    /**
     * @var freeVariables[]
     */
    public $freeVariables;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'chargeVariables' => 'chargeVariables',
        'freeVariables' => 'freeVariables',
        'templateCode' => 'templateCode',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->chargeVariables)) {
            Model::validateArray($this->chargeVariables);
        }
        if (\is_array($this->freeVariables)) {
            Model::validateArray($this->freeVariables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeVariables) {
            if (\is_array($this->chargeVariables)) {
                $res['chargeVariables'] = [];
                $n1 = 0;
                foreach ($this->chargeVariables as $item1) {
                    $res['chargeVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->freeVariables) {
            if (\is_array($this->freeVariables)) {
                $res['freeVariables'] = [];
                $n1 = 0;
                foreach ($this->freeVariables as $item1) {
                    $res['freeVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['chargeVariables'])) {
            if (!empty($map['chargeVariables'])) {
                $model->chargeVariables = [];
                $n1 = 0;
                foreach ($map['chargeVariables'] as $item1) {
                    $model->chargeVariables[$n1] = chargeVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['freeVariables'])) {
            if (!empty($map['freeVariables'])) {
                $model->freeVariables = [];
                $n1 = 0;
                foreach ($map['freeVariables'] as $item1) {
                    $model->freeVariables[$n1] = freeVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
