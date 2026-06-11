<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo\ext;

use AlibabaCloud\Dara\Model;

class virus extends Model
{
    /**
     * @var string
     */
    public $ext;

    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'ext' => 'Ext',
        'score' => 'Score',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
