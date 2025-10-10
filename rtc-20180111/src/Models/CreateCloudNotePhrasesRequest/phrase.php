<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\CreateCloudNotePhrasesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateCloudNotePhrasesRequest\phrase\wordWeights;

class phrase extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var wordWeights[]
     */
    public $wordWeights;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'wordWeights' => 'WordWeights',
    ];

    public function validate()
    {
        if (\is_array($this->wordWeights)) {
            Model::validateArray($this->wordWeights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->wordWeights) {
            if (\is_array($this->wordWeights)) {
                $res['WordWeights'] = [];
                $n1 = 0;
                foreach ($this->wordWeights as $item1) {
                    $res['WordWeights'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['WordWeights'])) {
            if (!empty($map['WordWeights'])) {
                $model->wordWeights = [];
                $n1 = 0;
                foreach ($map['WordWeights'] as $item1) {
                    $model->wordWeights[$n1] = wordWeights::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
