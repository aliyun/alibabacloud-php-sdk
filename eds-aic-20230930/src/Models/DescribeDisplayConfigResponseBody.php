<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeDisplayConfigResponseBody\displayConfigModel;
use AlibabaCloud\Tea\Model;

class DescribeDisplayConfigResponseBody extends Model
{
    /**
     * @var displayConfigModel[]
     */
    public $displayConfigModel;

    /**
     * @example FFEF7EFE-1E36-56D1-B5BF-5BACE43B****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'displayConfigModel' => 'DisplayConfigModel',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayConfigModel) {
            $res['DisplayConfigModel'] = [];
            if (null !== $this->displayConfigModel && \is_array($this->displayConfigModel)) {
                $n = 0;
                foreach ($this->displayConfigModel as $item) {
                    $res['DisplayConfigModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDisplayConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayConfigModel'])) {
            if (!empty($map['DisplayConfigModel'])) {
                $model->displayConfigModel = [];
                $n = 0;
                foreach ($map['DisplayConfigModel'] as $item) {
                    $model->displayConfigModel[$n++] = null !== $item ? displayConfigModel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
