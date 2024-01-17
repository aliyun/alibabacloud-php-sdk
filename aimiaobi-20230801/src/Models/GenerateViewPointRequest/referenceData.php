<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointRequest;

use AlibabaCloud\Tea\Model;

class referenceData extends Model
{
    /**
     * @var string[]
     */
    public $miniDoc;
    protected $_name = [
        'miniDoc' => 'MiniDoc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->miniDoc) {
            $res['MiniDoc'] = $this->miniDoc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referenceData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MiniDoc'])) {
            if (!empty($map['MiniDoc'])) {
                $model->miniDoc = $map['MiniDoc'];
            }
        }

        return $model;
    }
}
