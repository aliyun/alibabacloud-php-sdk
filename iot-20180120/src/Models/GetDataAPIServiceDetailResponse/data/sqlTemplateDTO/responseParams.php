<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse\data\sqlTemplateDTO;

use AlibabaCloud\Tea\Model;

class responseParams extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse\data\sqlTemplateDTO\responseParams\responseParams[]
     */
    public $responseParams;
    protected $_name = [
        'responseParams' => 'ResponseParams',
    ];

    public function validate()
    {
        Model::validateRequired('responseParams', $this->responseParams, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->responseParams) {
            $res['ResponseParams'] = [];
            if (null !== $this->responseParams && \is_array($this->responseParams)) {
                $n = 0;
                foreach ($this->responseParams as $item) {
                    $res['ResponseParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResponseParams'])) {
            if (!empty($map['ResponseParams'])) {
                $model->responseParams = [];
                $n                     = 0;
                foreach ($map['ResponseParams'] as $item) {
                    $model->responseParams[$n++] = null !== $item ? \AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse\data\sqlTemplateDTO\responseParams\responseParams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
