<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogLogResponseBody\data;

use AlibabaCloud\Dara\Model;

class hitIntentionList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $intentionName;

    /**
     * @var string
     */
    public $intentionScript;
    protected $_name = [
        'description' => 'description',
        'intentionName' => 'intentionName',
        'intentionScript' => 'intentionScript',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->intentionName) {
            $res['intentionName'] = $this->intentionName;
        }

        if (null !== $this->intentionScript) {
            $res['intentionScript'] = $this->intentionScript;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['intentionName'])) {
            $model->intentionName = $map['intentionName'];
        }

        if (isset($map['intentionScript'])) {
            $model->intentionScript = $map['intentionScript'];
        }

        return $model;
    }
}
