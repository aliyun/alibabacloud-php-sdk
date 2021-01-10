<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo;

use AlibabaCloud\Tea\Model;

class hitCids extends Model
{
    /**
     * @var string[]
     */
    public $cidItem;
    protected $_name = [
        'cidItem' => 'CidItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidItem) {
            $res['CidItem'] = $this->cidItem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitCids
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidItem'])) {
            if (!empty($map['CidItem'])) {
                $model->cidItem = $map['CidItem'];
            }
        }

        return $model;
    }
}
