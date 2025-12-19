<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class AppOperateAction extends Model
{
    /**
     * @var string
     */
    public $actionKey;

    /**
     * @var string
     */
    public $actionText;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $href;
    protected $_name = [
        'actionKey' => 'ActionKey',
        'actionText' => 'ActionText',
        'enable' => 'Enable',
        'href' => 'Href',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionKey) {
            $res['ActionKey'] = $this->actionKey;
        }

        if (null !== $this->actionText) {
            $res['ActionText'] = $this->actionText;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->href) {
            $res['Href'] = $this->href;
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
        if (isset($map['ActionKey'])) {
            $model->actionKey = $map['ActionKey'];
        }

        if (isset($map['ActionText'])) {
            $model->actionText = $map['ActionText'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Href'])) {
            $model->href = $map['Href'];
        }

        return $model;
    }
}
