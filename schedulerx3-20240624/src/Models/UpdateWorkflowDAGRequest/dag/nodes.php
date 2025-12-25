<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGRequest\dag;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGRequest\dag\nodes\coordinate;

class nodes extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var coordinate
     */
    public $coordinate;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'content' => 'Content',
        'coordinate' => 'Coordinate',
        'id' => 'Id',
    ];

    public function validate()
    {
        if (null !== $this->coordinate) {
            $this->coordinate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->coordinate) {
            $res['Coordinate'] = null !== $this->coordinate ? $this->coordinate->toArray($noStream) : $this->coordinate;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (isset($map['Coordinate'])) {
            $model->coordinate = coordinate::fromMap($map['Coordinate']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
