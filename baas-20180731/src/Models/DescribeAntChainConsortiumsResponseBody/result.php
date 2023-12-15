<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainConsortiumsResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainConsortiumsResponseBody\result\antConsortiums;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainConsortiumsResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var antConsortiums[]
     */
    public $antConsortiums;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'antConsortiums' => 'AntConsortiums',
        'pagination'     => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antConsortiums) {
            $res['AntConsortiums'] = [];
            if (null !== $this->antConsortiums && \is_array($this->antConsortiums)) {
                $n = 0;
                foreach ($this->antConsortiums as $item) {
                    $res['AntConsortiums'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['AntConsortiums'])) {
            if (!empty($map['AntConsortiums'])) {
                $model->antConsortiums = [];
                $n                     = 0;
                foreach ($map['AntConsortiums'] as $item) {
                    $model->antConsortiums[$n++] = null !== $item ? antConsortiums::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
