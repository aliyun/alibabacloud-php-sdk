<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeDisplayConfigResponseBody\displayConfigModel;

class DescribeDisplayConfigResponseBody extends Model
{
    /**
     * @var displayConfigModel[]
     */
    public $displayConfigModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'displayConfigModel' => 'DisplayConfigModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->displayConfigModel)) {
            Model::validateArray($this->displayConfigModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayConfigModel) {
            if (\is_array($this->displayConfigModel)) {
                $res['DisplayConfigModel'] = [];
                $n1 = 0;
                foreach ($this->displayConfigModel as $item1) {
                    $res['DisplayConfigModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DisplayConfigModel'])) {
            if (!empty($map['DisplayConfigModel'])) {
                $model->displayConfigModel = [];
                $n1 = 0;
                foreach ($map['DisplayConfigModel'] as $item1) {
                    $model->displayConfigModel[$n1] = displayConfigModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
