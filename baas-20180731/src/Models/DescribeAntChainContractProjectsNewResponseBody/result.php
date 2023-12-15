<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectsNewResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectsNewResponseBody\result\contractProjects;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainContractProjectsNewResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var contractProjects[]
     */
    public $contractProjects;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'contractProjects' => 'ContractProjects',
        'pagination'       => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contractProjects) {
            $res['ContractProjects'] = [];
            if (null !== $this->contractProjects && \is_array($this->contractProjects)) {
                $n = 0;
                foreach ($this->contractProjects as $item) {
                    $res['ContractProjects'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ContractProjects'])) {
            if (!empty($map['ContractProjects'])) {
                $model->contractProjects = [];
                $n                       = 0;
                foreach ($map['ContractProjects'] as $item) {
                    $model->contractProjects[$n++] = null !== $item ? contractProjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
