<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest;

use AlibabaCloud\Dara\Model;

class noticeEnclosureInfos extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'name' => 'Name',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
