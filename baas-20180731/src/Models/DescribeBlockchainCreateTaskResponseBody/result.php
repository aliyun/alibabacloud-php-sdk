<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainCreateTaskResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainCreateTaskResponseBody\result\blockchainCreateTasks;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainCreateTaskResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var blockchainCreateTasks[]
     */
    public $blockchainCreateTasks;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'blockchainCreateTasks' => 'BlockchainCreateTasks',
        'pagination'            => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockchainCreateTasks) {
            $res['BlockchainCreateTasks'] = [];
            if (null !== $this->blockchainCreateTasks && \is_array($this->blockchainCreateTasks)) {
                $n = 0;
                foreach ($this->blockchainCreateTasks as $item) {
                    $res['BlockchainCreateTasks'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['BlockchainCreateTasks'])) {
            if (!empty($map['BlockchainCreateTasks'])) {
                $model->blockchainCreateTasks = [];
                $n                            = 0;
                foreach ($map['BlockchainCreateTasks'] as $item) {
                    $model->blockchainCreateTasks[$n++] = null !== $item ? blockchainCreateTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
