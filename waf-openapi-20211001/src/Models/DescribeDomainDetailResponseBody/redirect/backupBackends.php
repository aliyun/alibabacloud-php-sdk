<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect;

use AlibabaCloud\Tea\Model;

class backupBackends extends Model
{
    /**
     * @description The back-to-origin IP address or domain name.
     *
     * @example [
     * "1.1.XX.XX",
     * "2.2.XX.XX"
     * ]
     *
     * @var string
     */
    public $backend;
    protected $_name = [
        'backend' => 'Backend',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backend) {
            $res['Backend'] = $this->backend;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupBackends
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backend'])) {
            $model->backend = $map['Backend'];
        }

        return $model;
    }
}
