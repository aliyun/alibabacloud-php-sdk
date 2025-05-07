<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo;

class data extends Model
{
    /**
     * @var resultInfo[]
     */
    public $resultInfo;
    protected $_name = [
        'resultInfo' => 'ResultInfo',
    ];

    public function validate()
    {
        if (\is_array($this->resultInfo)) {
            Model::validateArray($this->resultInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultInfo) {
            if (\is_array($this->resultInfo)) {
                $res['ResultInfo'] = [];
                $n1 = 0;
                foreach ($this->resultInfo as $item1) {
                    $res['ResultInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResultInfo'])) {
            if (!empty($map['ResultInfo'])) {
                $model->resultInfo = [];
                $n1 = 0;
                foreach ($map['ResultInfo'] as $item1) {
                    $model->resultInfo[$n1++] = resultInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
