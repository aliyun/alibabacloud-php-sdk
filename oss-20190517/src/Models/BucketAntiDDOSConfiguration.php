<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\BucketAntiDDOSConfiguration\cnames;
use AlibabaCloud\Tea\Model;

class BucketAntiDDOSConfiguration extends Model
{
    /**
     * @var cnames
     */
    public $cnames;
    protected $_name = [
        'cnames' => 'Cnames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnames) {
            $res['Cnames'] = null !== $this->cnames ? $this->cnames->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BucketAntiDDOSConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cnames'])) {
            $model->cnames = cnames::fromMap($map['Cnames']);
        }

        return $model;
    }
}
