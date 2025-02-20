<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\actionList\param;

class actionList extends Model
{
    /**
     * @var string
     */
    public $actionKey;
    /**
     * @var int
     */
    public $actionType;
    /**
     * @var int
     */
    public $buttonStyleType;
    /**
     * @var param
     */
    public $param;
    /**
     * @var string
     */
    public $pcUrl;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'actionKey'       => 'actionKey',
        'actionType'      => 'actionType',
        'buttonStyleType' => 'buttonStyleType',
        'param'           => 'param',
        'pcUrl'           => 'pcUrl',
        'title'           => 'title',
        'url'             => 'url',
    ];

    public function validate()
    {
        if (null !== $this->param) {
            $this->param->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionKey) {
            $res['actionKey'] = $this->actionKey;
        }

        if (null !== $this->actionType) {
            $res['actionType'] = $this->actionType;
        }

        if (null !== $this->buttonStyleType) {
            $res['buttonStyleType'] = $this->buttonStyleType;
        }

        if (null !== $this->param) {
            $res['param'] = null !== $this->param ? $this->param->toArray($noStream) : $this->param;
        }

        if (null !== $this->pcUrl) {
            $res['pcUrl'] = $this->pcUrl;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['actionKey'])) {
            $model->actionKey = $map['actionKey'];
        }

        if (isset($map['actionType'])) {
            $model->actionType = $map['actionType'];
        }

        if (isset($map['buttonStyleType'])) {
            $model->buttonStyleType = $map['buttonStyleType'];
        }

        if (isset($map['param'])) {
            $model->param = param::fromMap($map['param']);
        }

        if (isset($map['pcUrl'])) {
            $model->pcUrl = $map['pcUrl'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
