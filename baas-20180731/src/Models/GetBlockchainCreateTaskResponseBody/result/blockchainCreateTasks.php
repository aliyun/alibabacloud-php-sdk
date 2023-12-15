<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\GetBlockchainCreateTaskResponseBody\result;

use AlibabaCloud\Tea\Model;

class blockchainCreateTasks extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Baas\V20180731\Models\GetBlockchainCreateTaskResponseBody\result\blockchainCreateTasks\blockchainCreateTasks[]
     */
    public $blockchainCreateTasks;
    protected $_name = [
        'blockchainCreateTasks' => 'BlockchainCreateTasks',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockchainCreateTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockchainCreateTasks'])) {
            if (!empty($map['BlockchainCreateTasks'])) {
                $model->blockchainCreateTasks = [];
                $n                            = 0;
                foreach ($map['BlockchainCreateTasks'] as $item) {
                    $model->blockchainCreateTasks[$n++] = null !== $item ? \AlibabaCloud\SDK\Baas\V20180731\Models\GetBlockchainCreateTaskResponseBody\result\blockchainCreateTasks\blockchainCreateTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
