<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTitleGenerationRequest;

use AlibabaCloud\Dara\Model;

class referenceData extends Model
{
    /**
     * @var string[]
     */
    public $contents;
    protected $_name = [
        'contents' => 'Contents',
    ];

    public function validate()
    {
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['Contents'] = [];
                $n1              = 0;
                foreach ($this->contents as $item1) {
                    $res['Contents'][$n1++] = $item1;
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
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n1              = 0;
                foreach ($map['Contents'] as $item1) {
                    $model->contents[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
