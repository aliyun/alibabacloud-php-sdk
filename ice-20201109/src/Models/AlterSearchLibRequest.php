<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class AlterSearchLibRequest extends Model
{
    /**
     * @var string
     */
    public $searchLibConfig;

    /**
     * @var string
     */
    public $searchLibName;
    protected $_name = [
        'searchLibConfig' => 'SearchLibConfig',
        'searchLibName' => 'SearchLibName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchLibConfig) {
            $res['SearchLibConfig'] = $this->searchLibConfig;
        }

        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
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
        if (isset($map['SearchLibConfig'])) {
            $model->searchLibConfig = $map['SearchLibConfig'];
        }

        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
