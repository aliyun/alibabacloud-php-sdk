<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainsNewResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainsNewResponseBody\result\antChains;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainsNewResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var antChains[]
     */
    public $antChains;

    /**
     * @var bool
     */
    public $isExist;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'antChains'  => 'AntChains',
        'isExist'    => 'IsExist',
        'pagination' => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
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
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
