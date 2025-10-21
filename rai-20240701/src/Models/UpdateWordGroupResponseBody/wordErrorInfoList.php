<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\UpdateWordGroupResponseBody;

use AlibabaCloud\Dara\Model;

class wordErrorInfoList extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $errorStatus;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'errorStatus' => 'ErrorStatus',
        'index' => 'Index',
        'label' => 'Label',
        'word' => 'Word',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->errorStatus) {
            $res['ErrorStatus'] = $this->errorStatus;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->word) {
            $res['Word'] = $this->word;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ErrorStatus'])) {
            $model->errorStatus = $map['ErrorStatus'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}
