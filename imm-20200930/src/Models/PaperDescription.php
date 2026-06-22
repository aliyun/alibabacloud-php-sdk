<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class PaperDescription extends Model
{
    /**
     * @var Summary[]
     */
    public $description;

    /**
     * @var string[]
     */
    public $titleID;
    protected $_name = [
        'description' => 'Description',
        'titleID' => 'TitleID',
    ];

    public function validate()
    {
        if (\is_array($this->description)) {
            Model::validateArray($this->description);
        }
        if (\is_array($this->titleID)) {
            Model::validateArray($this->titleID);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            if (\is_array($this->description)) {
                $res['Description'] = [];
                $n1 = 0;
                foreach ($this->description as $item1) {
                    $res['Description'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->titleID) {
            if (\is_array($this->titleID)) {
                $res['TitleID'] = [];
                $n1 = 0;
                foreach ($this->titleID as $item1) {
                    $res['TitleID'][$n1] = $item1;
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
            if (!empty($map['Description'])) {
                $model->description = [];
                $n1 = 0;
                foreach ($map['Description'] as $item1) {
                    $model->description[$n1] = Summary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TitleID'])) {
            if (!empty($map['TitleID'])) {
                $model->titleID = [];
                $n1 = 0;
                foreach ($map['TitleID'] as $item1) {
                    $model->titleID[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
