<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateBindResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateBindResponseBody\resultObject\chargeVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateBindResponseBody\resultObject\freeVariables;
use AlibabaCloud\Tea\Model;

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
        'freeVariables'   => 'freeVariables',
        'templateCode'    => 'templateCode',
        'totalCount'      => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeVariables) {
            $res['chargeVariables'] = [];
            if (null !== $this->chargeVariables && \is_array($this->chargeVariables)) {
                $n = 0;
                foreach ($this->chargeVariables as $item) {
                    $res['chargeVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->freeVariables) {
            $res['freeVariables'] = [];
            if (null !== $this->freeVariables && \is_array($this->freeVariables)) {
                $n = 0;
                foreach ($this->freeVariables as $item) {
                    $res['freeVariables'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chargeVariables'])) {
            if (!empty($map['chargeVariables'])) {
                $model->chargeVariables = [];
                $n                      = 0;
                foreach ($map['chargeVariables'] as $item) {
                    $model->chargeVariables[$n++] = null !== $item ? chargeVariables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['freeVariables'])) {
            if (!empty($map['freeVariables'])) {
                $model->freeVariables = [];
                $n                    = 0;
                foreach ($map['freeVariables'] as $item) {
                    $model->freeVariables[$n++] = null !== $item ? freeVariables::fromMap($item) : $item;
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
