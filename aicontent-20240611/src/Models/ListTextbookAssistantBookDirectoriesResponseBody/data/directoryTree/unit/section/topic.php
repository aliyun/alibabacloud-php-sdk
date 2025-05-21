<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data\directoryTree\unit\section;

use AlibabaCloud\Dara\Model;

class topic extends Model
{
    /**
     * @var string
     */
    public $labelId;

    /**
     * @var string
     */
    public $labelName;
    protected $_name = [
        'labelId' => 'labelId',
        'labelName' => 'labelName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelId) {
            $res['labelId'] = $this->labelId;
        }

        if (null !== $this->labelName) {
            $res['labelName'] = $this->labelName;
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
        if (isset($map['labelId'])) {
            $model->labelId = $map['labelId'];
        }

        if (isset($map['labelName'])) {
            $model->labelName = $map['labelName'];
        }

        return $model;
    }
}
