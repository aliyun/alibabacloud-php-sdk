<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class UpdateVideoInfosRequest extends Model
{
    /**
     * @var string
     */
    public $updateContent;
    protected $_name = [
        'updateContent' => 'UpdateContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->updateContent) {
            $res['UpdateContent'] = $this->updateContent;
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
        if (isset($map['UpdateContent'])) {
            $model->updateContent = $map['UpdateContent'];
        }

        return $model;
    }
}
