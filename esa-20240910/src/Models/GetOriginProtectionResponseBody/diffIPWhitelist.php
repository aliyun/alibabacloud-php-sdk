<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\diffIPWhitelist\addedIPWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\diffIPWhitelist\noChangeIpWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\diffIPWhitelist\removedIPWhitelist;
use AlibabaCloud\Tea\Model;

class diffIPWhitelist extends Model
{
    /**
     * @var addedIPWhitelist
     */
    public $addedIPWhitelist;

    /**
     * @var noChangeIpWhitelist
     */
    public $noChangeIpWhitelist;

    /**
     * @var removedIPWhitelist
     */
    public $removedIPWhitelist;
    protected $_name = [
        'addedIPWhitelist'    => 'AddedIPWhitelist',
        'noChangeIpWhitelist' => 'NoChangeIpWhitelist',
        'removedIPWhitelist'  => 'RemovedIPWhitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedIPWhitelist) {
            $res['AddedIPWhitelist'] = null !== $this->addedIPWhitelist ? $this->addedIPWhitelist->toMap() : null;
        }
        if (null !== $this->noChangeIpWhitelist) {
            $res['NoChangeIpWhitelist'] = null !== $this->noChangeIpWhitelist ? $this->noChangeIpWhitelist->toMap() : null;
        }
        if (null !== $this->removedIPWhitelist) {
            $res['RemovedIPWhitelist'] = null !== $this->removedIPWhitelist ? $this->removedIPWhitelist->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diffIPWhitelist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddedIPWhitelist'])) {
            $model->addedIPWhitelist = addedIPWhitelist::fromMap($map['AddedIPWhitelist']);
        }
        if (isset($map['NoChangeIpWhitelist'])) {
            $model->noChangeIpWhitelist = noChangeIpWhitelist::fromMap($map['NoChangeIpWhitelist']);
        }
        if (isset($map['RemovedIPWhitelist'])) {
            $model->removedIPWhitelist = removedIPWhitelist::fromMap($map['RemovedIPWhitelist']);
        }

        return $model;
    }
}
