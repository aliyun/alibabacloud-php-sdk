<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\currentIPWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\diffIPWhitelist;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\latestIPWhitelist;
use AlibabaCloud\Tea\Model;

class GetOriginProtectionResponseBody extends Model
{
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
     * @example true
     *
     * @var bool
     */
    public $needUpdate;

    /**
     * @example on
     *
     * @var string
     */
    public $originConverge;

    /**
     * @example on
     *
     * @var string
     */
    public $originProtection;

    /**
     * @example CB1A380B-09F0-41BB-A198-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'currentIPWhitelist' => 'CurrentIPWhitelist',
        'diffIPWhitelist'    => 'DiffIPWhitelist',
        'latestIPWhitelist'  => 'LatestIPWhitelist',
        'needUpdate'         => 'NeedUpdate',
        'originConverge'     => 'OriginConverge',
        'originProtection'   => 'OriginProtection',
        'requestId'          => 'RequestId',
        'siteId'             => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentIPWhitelist) {
            $res['CurrentIPWhitelist'] = null !== $this->currentIPWhitelist ? $this->currentIPWhitelist->toMap() : null;
        }
        if (null !== $this->diffIPWhitelist) {
            $res['DiffIPWhitelist'] = null !== $this->diffIPWhitelist ? $this->diffIPWhitelist->toMap() : null;
        }
        if (null !== $this->latestIPWhitelist) {
            $res['LatestIPWhitelist'] = null !== $this->latestIPWhitelist ? $this->latestIPWhitelist->toMap() : null;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOriginProtectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
