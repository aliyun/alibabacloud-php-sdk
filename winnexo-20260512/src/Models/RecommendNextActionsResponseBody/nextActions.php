<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\RecommendNextActionsResponseBody;

use AlibabaCloud\Dara\Model;

class nextActions extends Model
{
    /**
     * @var string
     */
    public $actionTitle;

    /**
     * @var string
     */
    public $skillCode;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'actionTitle' => 'actionTitle',
        'skillCode' => 'skillCode',
        'skillName' => 'skillName',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionTitle) {
            $res['actionTitle'] = $this->actionTitle;
        }

        if (null !== $this->skillCode) {
            $res['skillCode'] = $this->skillCode;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['actionTitle'])) {
            $model->actionTitle = $map['actionTitle'];
        }

        if (isset($map['skillCode'])) {
            $model->skillCode = $map['skillCode'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
