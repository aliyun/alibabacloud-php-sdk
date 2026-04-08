<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ExportHttpApiRequest;

use AlibabaCloud\Dara\Model;

class extensionConfig extends Model
{
    /**
     * @var bool
     */
    public $withAuthConfig;

    /**
     * @var bool
     */
    public $withAuthConsumer;

    /**
     * @var bool
     */
    public $withPlugin;

    /**
     * @var bool
     */
    public $withPolicy;

    /**
     * @var bool
     */
    public $withService;
    protected $_name = [
        'withAuthConfig' => 'withAuthConfig',
        'withAuthConsumer' => 'withAuthConsumer',
        'withPlugin' => 'withPlugin',
        'withPolicy' => 'withPolicy',
        'withService' => 'withService',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->withAuthConfig) {
            $res['withAuthConfig'] = $this->withAuthConfig;
        }

        if (null !== $this->withAuthConsumer) {
            $res['withAuthConsumer'] = $this->withAuthConsumer;
        }

        if (null !== $this->withPlugin) {
            $res['withPlugin'] = $this->withPlugin;
        }

        if (null !== $this->withPolicy) {
            $res['withPolicy'] = $this->withPolicy;
        }

        if (null !== $this->withService) {
            $res['withService'] = $this->withService;
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
        if (isset($map['withAuthConfig'])) {
            $model->withAuthConfig = $map['withAuthConfig'];
        }

        if (isset($map['withAuthConsumer'])) {
            $model->withAuthConsumer = $map['withAuthConsumer'];
        }

        if (isset($map['withPlugin'])) {
            $model->withPlugin = $map['withPlugin'];
        }

        if (isset($map['withPolicy'])) {
            $model->withPolicy = $map['withPolicy'];
        }

        if (isset($map['withService'])) {
            $model->withService = $map['withService'];
        }

        return $model;
    }
}
