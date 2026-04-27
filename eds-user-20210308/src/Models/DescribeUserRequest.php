<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserRequest extends Model
{
    /**
     * @var string
     */
    public $businessChannel;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string[]
     */
    public $requireExtraAttributes;
    protected $_name = [
        'businessChannel' => 'BusinessChannel',
        'endUserId' => 'EndUserId',
        'requireExtraAttributes' => 'RequireExtraAttributes',
    ];

    public function validate()
    {
        if (\is_array($this->requireExtraAttributes)) {
            Model::validateArray($this->requireExtraAttributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessChannel) {
            $res['BusinessChannel'] = $this->businessChannel;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->requireExtraAttributes) {
            if (\is_array($this->requireExtraAttributes)) {
                $res['RequireExtraAttributes'] = [];
                $n1 = 0;
                foreach ($this->requireExtraAttributes as $item1) {
                    $res['RequireExtraAttributes'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['BusinessChannel'])) {
            $model->businessChannel = $map['BusinessChannel'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['RequireExtraAttributes'])) {
            if (!empty($map['RequireExtraAttributes'])) {
                $model->requireExtraAttributes = [];
                $n1 = 0;
                foreach ($map['RequireExtraAttributes'] as $item1) {
                    $model->requireExtraAttributes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
