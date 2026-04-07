<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ResumeSessionRequest extends Model
{
    /**
     * @var bool
     */
    public $fileSystemOnly;

    /**
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'fileSystemOnly' => 'fileSystemOnly',
        'qualifier' => 'qualifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemOnly) {
            $res['fileSystemOnly'] = $this->fileSystemOnly;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
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
        if (isset($map['fileSystemOnly'])) {
            $model->fileSystemOnly = $map['fileSystemOnly'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
