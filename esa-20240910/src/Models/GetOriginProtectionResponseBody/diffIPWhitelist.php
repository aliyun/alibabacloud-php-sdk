<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\diffIPWhitelist\addedIPWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\diffIPWhitelist\noChangeIpWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\diffIPWhitelist\removedIPWhitelist;

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
        'addedIPWhitelist' => 'AddedIPWhitelist',
        'noChangeIpWhitelist' => 'NoChangeIpWhitelist',
        'removedIPWhitelist' => 'RemovedIPWhitelist',
    ];

    public function validate()
    {
        if (null !== $this->addedIPWhitelist) {
            $this->addedIPWhitelist->validate();
        }
        if (null !== $this->noChangeIpWhitelist) {
            $this->noChangeIpWhitelist->validate();
        }
        if (null !== $this->removedIPWhitelist) {
            $this->removedIPWhitelist->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addedIPWhitelist) {
            $res['AddedIPWhitelist'] = null !== $this->addedIPWhitelist ? $this->addedIPWhitelist->toArray($noStream) : $this->addedIPWhitelist;
        }

        if (null !== $this->noChangeIpWhitelist) {
            $res['NoChangeIpWhitelist'] = null !== $this->noChangeIpWhitelist ? $this->noChangeIpWhitelist->toArray($noStream) : $this->noChangeIpWhitelist;
        }

        if (null !== $this->removedIPWhitelist) {
            $res['RemovedIPWhitelist'] = null !== $this->removedIPWhitelist ? $this->removedIPWhitelist->toArray($noStream) : $this->removedIPWhitelist;
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
