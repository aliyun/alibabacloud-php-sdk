<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\GetBlockchainCreateTaskResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\GetBlockchainCreateTaskResponseBody\result\blockchainCreateTasks;
use AlibabaCloud\SDK\Baas\V20180731\Models\GetBlockchainCreateTaskResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var blockchainCreateTasks
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
            $res['BlockchainCreateTasks'] = null !== $this->blockchainCreateTasks ? $this->blockchainCreateTasks->toMap() : null;
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
            $model->blockchainCreateTasks = blockchainCreateTasks::fromMap($map['BlockchainCreateTasks']);
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
