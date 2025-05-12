<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\m3U8NonStandardSupport;

use AlibabaCloud\Dara\Model;

class TS extends Model
{
    /**
     * @var bool
     */
    public $md5Support;

    /**
     * @var bool
     */
    public $sizeSupport;
    protected $_name = [
        'md5Support' => 'Md5Support',
        'sizeSupport' => 'SizeSupport',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->md5Support) {
            $res['Md5Support'] = $this->md5Support;
        }

        if (null !== $this->sizeSupport) {
            $res['SizeSupport'] = $this->sizeSupport;
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
        if (isset($map['Md5Support'])) {
            $model->md5Support = $map['Md5Support'];
        }

        if (isset($map['SizeSupport'])) {
            $model->sizeSupport = $map['SizeSupport'];
        }

        return $model;
    }
}
