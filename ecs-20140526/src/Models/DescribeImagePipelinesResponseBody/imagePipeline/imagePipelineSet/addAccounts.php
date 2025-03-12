<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\Tea\Model;

class addAccounts extends Model
{
    /**
     * @var string[]
     */
    public $addAccount;
    protected $_name = [
        'addAccount' => 'AddAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addAccount) {
            $res['AddAccount'] = $this->addAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddAccount'])) {
            if (!empty($map['AddAccount'])) {
                $model->addAccount = $map['AddAccount'];
            }
        }

        return $model;
    }
}
