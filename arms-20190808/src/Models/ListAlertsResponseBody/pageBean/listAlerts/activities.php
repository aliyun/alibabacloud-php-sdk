<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean\listAlerts;

use AlibabaCloud\Tea\Model;

class activities extends Model
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
    public $handlerName;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'content'     => 'Content',
        'description' => 'Description',
        'handlerName' => 'HandlerName',
        'time'        => 'Time',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->handlerName) {
            $res['HandlerName'] = $this->handlerName;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HandlerName'])) {
            $model->handlerName = $map['HandlerName'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
