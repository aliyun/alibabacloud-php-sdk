<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointRequest;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->miniDoc)) {
            Model::validateArray($this->miniDoc);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->miniDoc) {
            if (\is_array($this->miniDoc)) {
                $res['MiniDoc'] = [];
                $n1 = 0;
                foreach ($this->miniDoc as $item1) {
                    $res['MiniDoc'][$n1++] = $item1;
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
        if (isset($map['MiniDoc'])) {
            if (!empty($map['MiniDoc'])) {
                $model->miniDoc = [];
                $n1 = 0;
                foreach ($map['MiniDoc'] as $item1) {
                    $model->miniDoc[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
