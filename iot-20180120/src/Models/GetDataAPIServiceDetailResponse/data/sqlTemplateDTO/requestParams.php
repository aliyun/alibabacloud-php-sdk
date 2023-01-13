<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse\data\sqlTemplateDTO;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse\data\sqlTemplateDTO\requestParams\requestParams[]
     */
    public $requestParams;
    protected $_name = [
        'requestParams' => 'RequestParams',
    ];

    public function validate()
    {
        Model::validateRequired('requestParams', $this->requestParams, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestParams) {
            $res['RequestParams'] = [];
            if (null !== $this->requestParams && \is_array($this->requestParams)) {
                $n = 0;
                foreach ($this->requestParams as $item) {
                    $res['RequestParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestParams'])) {
            if (!empty($map['RequestParams'])) {
                $model->requestParams = [];
                $n                    = 0;
                foreach ($map['RequestParams'] as $item) {
                    $model->requestParams[$n++] = null !== $item ? \AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponse\data\sqlTemplateDTO\requestParams\requestParams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
