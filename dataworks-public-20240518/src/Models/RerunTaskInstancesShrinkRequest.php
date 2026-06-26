<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class RerunTaskInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $idsShrink;

    /**
     * @var bool
     */
    public $useLatestConfig;
    protected $_name = [
        'comment' => 'Comment',
        'idsShrink' => 'Ids',
        'useLatestConfig' => 'UseLatestConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
        }

        if (null !== $this->useLatestConfig) {
            $res['UseLatestConfig'] = $this->useLatestConfig;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
        }

        if (isset($map['UseLatestConfig'])) {
            $model->useLatestConfig = $map['UseLatestConfig'];
        }

        return $model;
    }
}
