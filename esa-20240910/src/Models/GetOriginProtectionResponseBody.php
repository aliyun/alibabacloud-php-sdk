<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\currentIPWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\diffIPWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\latestIPWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\regionalCurrentIPWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\regionalDiffIPWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\regionalLatestIPWhitelist;

class GetOriginProtectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $autoConfirmIPList;

    /**
     * @var currentIPWhitelist
     */
    public $currentIPWhitelist;

    /**
     * @var diffIPWhitelist
     */
    public $diffIPWhitelist;

    /**
     * @var latestIPWhitelist
     */
    public $latestIPWhitelist;

    /**
     * @var bool
     */
    public $needUpdate;

    /**
     * @var string
     */
    public $originConverge;

    /**
     * @var string
     */
    public $originProtection;

    /**
     * @var regionalCurrentIPWhitelist
     */
    public $regionalCurrentIPWhitelist;

    /**
     * @var regionalDiffIPWhitelist
     */
    public $regionalDiffIPWhitelist;

    /**
     * @var regionalLatestIPWhitelist
     */
    public $regionalLatestIPWhitelist;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'autoConfirmIPList' => 'AutoConfirmIPList',
        'currentIPWhitelist' => 'CurrentIPWhitelist',
        'diffIPWhitelist' => 'DiffIPWhitelist',
        'latestIPWhitelist' => 'LatestIPWhitelist',
        'needUpdate' => 'NeedUpdate',
        'originConverge' => 'OriginConverge',
        'originProtection' => 'OriginProtection',
        'regionalCurrentIPWhitelist' => 'RegionalCurrentIPWhitelist',
        'regionalDiffIPWhitelist' => 'RegionalDiffIPWhitelist',
        'regionalLatestIPWhitelist' => 'RegionalLatestIPWhitelist',
        'requestId' => 'RequestId',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        if (null !== $this->currentIPWhitelist) {
            $this->currentIPWhitelist->validate();
        }
        if (null !== $this->diffIPWhitelist) {
            $this->diffIPWhitelist->validate();
        }
        if (null !== $this->latestIPWhitelist) {
            $this->latestIPWhitelist->validate();
        }
        if (null !== $this->regionalCurrentIPWhitelist) {
            $this->regionalCurrentIPWhitelist->validate();
        }
        if (null !== $this->regionalDiffIPWhitelist) {
            $this->regionalDiffIPWhitelist->validate();
        }
        if (null !== $this->regionalLatestIPWhitelist) {
            $this->regionalLatestIPWhitelist->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoConfirmIPList) {
            $res['AutoConfirmIPList'] = $this->autoConfirmIPList;
        }

        if (null !== $this->currentIPWhitelist) {
            $res['CurrentIPWhitelist'] = null !== $this->currentIPWhitelist ? $this->currentIPWhitelist->toArray($noStream) : $this->currentIPWhitelist;
        }

        if (null !== $this->diffIPWhitelist) {
            $res['DiffIPWhitelist'] = null !== $this->diffIPWhitelist ? $this->diffIPWhitelist->toArray($noStream) : $this->diffIPWhitelist;
        }

        if (null !== $this->latestIPWhitelist) {
            $res['LatestIPWhitelist'] = null !== $this->latestIPWhitelist ? $this->latestIPWhitelist->toArray($noStream) : $this->latestIPWhitelist;
        }

        if (null !== $this->needUpdate) {
            $res['NeedUpdate'] = $this->needUpdate;
        }

        if (null !== $this->originConverge) {
            $res['OriginConverge'] = $this->originConverge;
        }

        if (null !== $this->originProtection) {
            $res['OriginProtection'] = $this->originProtection;
        }

        if (null !== $this->regionalCurrentIPWhitelist) {
            $res['RegionalCurrentIPWhitelist'] = null !== $this->regionalCurrentIPWhitelist ? $this->regionalCurrentIPWhitelist->toArray($noStream) : $this->regionalCurrentIPWhitelist;
        }

        if (null !== $this->regionalDiffIPWhitelist) {
            $res['RegionalDiffIPWhitelist'] = null !== $this->regionalDiffIPWhitelist ? $this->regionalDiffIPWhitelist->toArray($noStream) : $this->regionalDiffIPWhitelist;
        }

        if (null !== $this->regionalLatestIPWhitelist) {
            $res['RegionalLatestIPWhitelist'] = null !== $this->regionalLatestIPWhitelist ? $this->regionalLatestIPWhitelist->toArray($noStream) : $this->regionalLatestIPWhitelist;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['AutoConfirmIPList'])) {
            $model->autoConfirmIPList = $map['AutoConfirmIPList'];
        }

        if (isset($map['CurrentIPWhitelist'])) {
            $model->currentIPWhitelist = currentIPWhitelist::fromMap($map['CurrentIPWhitelist']);
        }

        if (isset($map['DiffIPWhitelist'])) {
            $model->diffIPWhitelist = diffIPWhitelist::fromMap($map['DiffIPWhitelist']);
        }

        if (isset($map['LatestIPWhitelist'])) {
            $model->latestIPWhitelist = latestIPWhitelist::fromMap($map['LatestIPWhitelist']);
        }

        if (isset($map['NeedUpdate'])) {
            $model->needUpdate = $map['NeedUpdate'];
        }

        if (isset($map['OriginConverge'])) {
            $model->originConverge = $map['OriginConverge'];
        }

        if (isset($map['OriginProtection'])) {
            $model->originProtection = $map['OriginProtection'];
        }

        if (isset($map['RegionalCurrentIPWhitelist'])) {
            $model->regionalCurrentIPWhitelist = regionalCurrentIPWhitelist::fromMap($map['RegionalCurrentIPWhitelist']);
        }

        if (isset($map['RegionalDiffIPWhitelist'])) {
            $model->regionalDiffIPWhitelist = regionalDiffIPWhitelist::fromMap($map['RegionalDiffIPWhitelist']);
        }

        if (isset($map['RegionalLatestIPWhitelist'])) {
            $model->regionalLatestIPWhitelist = regionalLatestIPWhitelist::fromMap($map['RegionalLatestIPWhitelist']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
