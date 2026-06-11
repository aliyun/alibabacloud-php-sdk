<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo\ext\config;

use AlibabaCloud\Dara\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $line;
    protected $_name = [
        'content' => 'Content',
        'description' => 'Description',
        'itemName' => 'ItemName',
        'line' => 'Line',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->line) {
            $res['Line'] = $this->line;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }

        return $model;
    }
}
