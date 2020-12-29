<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsResponseBody\result\antChains;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainsResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var pagination
     */
    public $pagination;

    /**
     * @var antChains[]
     */
    public $antChains;

    /**
     * @var bool
     */
    public $isExist;
    protected $_name = [
        'pagination' => 'Pagination',
        'antChains'  => 'AntChains',
        'isExist'    => 'IsExist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }
        if (null !== $this->antChains) {
            $res['AntChains'] = [];
            if (null !== $this->antChains && \is_array($this->antChains)) {
                $n = 0;
                foreach ($this->antChains as $item) {
                    $res['AntChains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isExist) {
            $res['IsExist'] = $this->isExist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }
        if (isset($map['AntChains'])) {
            if (!empty($map['AntChains'])) {
                $model->antChains = [];
                $n                = 0;
                foreach ($map['AntChains'] as $item) {
                    $model->antChains[$n++] = null !== $item ? antChains::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsExist'])) {
            $model->isExist = $map['IsExist'];
        }

        return $model;
    }
}
