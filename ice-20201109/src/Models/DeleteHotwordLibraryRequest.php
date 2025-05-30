<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteHotwordLibraryRequest extends Model
{
    /**
     * @var string
     */
    public $hotwordLibraryId;
    protected $_name = [
        'hotwordLibraryId' => 'HotwordLibraryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotwordLibraryId) {
            $res['HotwordLibraryId'] = $this->hotwordLibraryId;
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
        if (isset($map['HotwordLibraryId'])) {
            $model->hotwordLibraryId = $map['HotwordLibraryId'];
        }

        return $model;
    }
}
