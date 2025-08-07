<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->cidItem)) {
            Model::validateArray($this->cidItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidItem) {
            if (\is_array($this->cidItem)) {
                $res['CidItem'] = [];
                $n1 = 0;
                foreach ($this->cidItem as $item1) {
                    $res['CidItem'][$n1] = $item1;
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
        if (isset($map['CidItem'])) {
            if (!empty($map['CidItem'])) {
                $model->cidItem = [];
                $n1 = 0;
                foreach ($map['CidItem'] as $item1) {
                    $model->cidItem[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
