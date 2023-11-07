<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim;

use AlibabaCloud\Tea\Model;

class jurDesc extends Model
{
    /**
     * @example New Zealand
     *
     * @var string
     */
    public $desc;

    /**
     * @example NZ
     *
     * @var string
     */
    public $jurCC;
    protected $_name = [
        'desc'  => 'Desc',
        'jurCC' => 'JurCC',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->jurCC) {
            $res['JurCC'] = $this->jurCC;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jurDesc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['JurCC'])) {
            $model->jurCC = $map['JurCC'];
        }

        return $model;
    }
}
