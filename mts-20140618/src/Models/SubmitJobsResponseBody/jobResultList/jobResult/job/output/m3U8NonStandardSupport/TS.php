<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\m3U8NonStandardSupport;

use AlibabaCloud\Tea\Model;

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
        'md5Support'  => 'Md5Support',
        'sizeSupport' => 'SizeSupport',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return TS
     */
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
