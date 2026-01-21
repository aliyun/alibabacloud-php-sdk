<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bsn\V20150512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bsn\V20150512\Models\GetBsnByResourceResponseBody\datas;

class GetBsnByResourceResponseBody extends Model
{
    /**
     * @var datas
     */
    public $datas;
    protected $_name = [
        'datas' => 'datas',
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
            $res['datas'] = null !== $this->datas ? $this->datas->toArray($noStream) : $this->datas;
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
        if (isset($map['datas'])) {
            $model->datas = datas::fromMap($map['datas']);
        }

        return $model;
    }
}
