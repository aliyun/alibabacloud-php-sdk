<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessRequest\alertConfig;

use AlibabaCloud\Dara\Model;

class targetList extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $jsonParams;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'arn' => 'Arn',
        'id' => 'Id',
        'jsonParams' => 'JsonParams',
        'level' => 'Level',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jsonParams) {
            $res['JsonParams'] = $this->jsonParams;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['JsonParams'])) {
            $model->jsonParams = $map['JsonParams'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
