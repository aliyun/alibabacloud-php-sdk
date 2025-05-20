<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageContentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageContentResponseBody\data\datas;

class data extends Model
{
    /**
     * @var datas
     */
    public $datas;
    protected $_name = [
        'datas' => 'Datas',
    ];

    public function validate()
    {
        if (null !== $this->datas) {
            $this->datas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datas) {
            $res['Datas'] = null !== $this->datas ? $this->datas->toArray($noStream) : $this->datas;
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
        if (isset($map['Datas'])) {
            $model->datas = datas::fromMap($map['Datas']);
        }

        return $model;
    }
}
