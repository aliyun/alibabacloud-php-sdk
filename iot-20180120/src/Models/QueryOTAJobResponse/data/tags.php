<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAJobResponse\data\tags\otaTagDTO;
use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var otaTagDTO[]
     */
    public $otaTagDTO;
    protected $_name = [
        'otaTagDTO' => 'OtaTagDTO',
    ];

    public function validate()
    {
        Model::validateRequired('otaTagDTO', $this->otaTagDTO, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->otaTagDTO) {
            $res['OtaTagDTO'] = [];
            if (null !== $this->otaTagDTO && \is_array($this->otaTagDTO)) {
                $n = 0;
                foreach ($this->otaTagDTO as $item) {
                    $res['OtaTagDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OtaTagDTO'])) {
            if (!empty($map['OtaTagDTO'])) {
                $model->otaTagDTO = [];
                $n                = 0;
                foreach ($map['OtaTagDTO'] as $item) {
                    $model->otaTagDTO[$n++] = null !== $item ? otaTagDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
