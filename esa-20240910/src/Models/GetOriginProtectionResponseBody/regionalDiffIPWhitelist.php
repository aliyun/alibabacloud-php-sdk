<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\regionalDiffIPWhitelist\addedIPRegionWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\regionalDiffIPWhitelist\noChangeIpWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\regionalDiffIPWhitelist\removedIPRegionWhitelist;

class regionalDiffIPWhitelist extends Model
{
    /**
     * @var addedIPRegionWhitelist
     */
    public $addedIPRegionWhitelist;

    /**
     * @var noChangeIpWhitelist
     */
    public $noChangeIpWhitelist;

    /**
     * @var removedIPRegionWhitelist
     */
    public $removedIPRegionWhitelist;
    protected $_name = [
        'addedIPRegionWhitelist' => 'AddedIPRegionWhitelist',
        'noChangeIpWhitelist' => 'NoChangeIpWhitelist',
        'removedIPRegionWhitelist' => 'RemovedIPRegionWhitelist',
    ];

    public function validate()
    {
        if (null !== $this->addedIPRegionWhitelist) {
            $this->addedIPRegionWhitelist->validate();
        }
        if (null !== $this->noChangeIpWhitelist) {
            $this->noChangeIpWhitelist->validate();
        }
        if (null !== $this->removedIPRegionWhitelist) {
            $this->removedIPRegionWhitelist->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addedIPRegionWhitelist) {
            $res['AddedIPRegionWhitelist'] = null !== $this->addedIPRegionWhitelist ? $this->addedIPRegionWhitelist->toArray($noStream) : $this->addedIPRegionWhitelist;
        }

        if (null !== $this->noChangeIpWhitelist) {
            $res['NoChangeIpWhitelist'] = null !== $this->noChangeIpWhitelist ? $this->noChangeIpWhitelist->toArray($noStream) : $this->noChangeIpWhitelist;
        }

        if (null !== $this->removedIPRegionWhitelist) {
            $res['RemovedIPRegionWhitelist'] = null !== $this->removedIPRegionWhitelist ? $this->removedIPRegionWhitelist->toArray($noStream) : $this->removedIPRegionWhitelist;
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
        if (isset($map['AddedIPRegionWhitelist'])) {
            $model->addedIPRegionWhitelist = addedIPRegionWhitelist::fromMap($map['AddedIPRegionWhitelist']);
        }

        if (isset($map['NoChangeIpWhitelist'])) {
            $model->noChangeIpWhitelist = noChangeIpWhitelist::fromMap($map['NoChangeIpWhitelist']);
        }

        if (isset($map['RemovedIPRegionWhitelist'])) {
            $model->removedIPRegionWhitelist = removedIPRegionWhitelist::fromMap($map['RemovedIPRegionWhitelist']);
        }

        return $model;
    }
}
