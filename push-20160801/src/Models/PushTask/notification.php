<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\hmos;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\ios;

class notification extends Model
{
    /**
     * @var android
     */
    public $android;

    /**
     * @var string
     */
    public $body;

    /**
     * @var hmos
     */
    public $hmos;

    /**
     * @var ios
     */
    public $ios;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'android' => 'Android',
        'body' => 'Body',
        'hmos' => 'Hmos',
        'ios' => 'Ios',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (null !== $this->android) {
            $this->android->validate();
        }
        if (null !== $this->hmos) {
            $this->hmos->validate();
        }
        if (null !== $this->ios) {
            $this->ios->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->android) {
            $res['Android'] = null !== $this->android ? $this->android->toArray($noStream) : $this->android;
        }

        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }

        if (null !== $this->hmos) {
            $res['Hmos'] = null !== $this->hmos ? $this->hmos->toArray($noStream) : $this->hmos;
        }

        if (null !== $this->ios) {
            $res['Ios'] = null !== $this->ios ? $this->ios->toArray($noStream) : $this->ios;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Android'])) {
            $model->android = android::fromMap($map['Android']);
        }

        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }

        if (isset($map['Hmos'])) {
            $model->hmos = hmos::fromMap($map['Hmos']);
        }

        if (isset($map['Ios'])) {
            $model->ios = ios::fromMap($map['Ios']);
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
