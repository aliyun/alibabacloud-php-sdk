<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetYzdInstanceTaskResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class downloadUrls extends Model
{
    /**
     * @var string
     */
    public $pwd;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'pwd' => 'pwd',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pwd) {
            $res['pwd'] = $this->pwd;
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
        if (isset($map['pwd'])) {
            $model->pwd = $map['pwd'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
