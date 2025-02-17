<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->addAccount)) {
            Model::validateArray($this->addAccount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addAccount) {
            if (\is_array($this->addAccount)) {
                $res['AddAccount'] = [];
                $n1                = 0;
                foreach ($this->addAccount as $item1) {
                    $res['AddAccount'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AddAccount'])) {
            if (!empty($map['AddAccount'])) {
                $model->addAccount = [];
                $n1                = 0;
                foreach ($map['AddAccount'] as $item1) {
                    $model->addAccount[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
