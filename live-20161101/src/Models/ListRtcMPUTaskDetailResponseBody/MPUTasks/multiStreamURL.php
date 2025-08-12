<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks;

use AlibabaCloud\Dara\Model;

class multiStreamURL extends Model
{
    /**
     * @var bool
     */
    public $isAliCdn;

    /**
     * @var string
     */
    public $URL;
    protected $_name = [
        'isAliCdn' => 'IsAliCdn',
        'URL' => 'URL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isAliCdn) {
            $res['IsAliCdn'] = $this->isAliCdn;
        }

        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
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
        if (isset($map['IsAliCdn'])) {
            $model->isAliCdn = $map['IsAliCdn'];
        }

        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
