<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBMiniEngineVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class minorVersionItems extends Model
{
    /**
     * @var string
     */
    public $communityMinorVersion;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $engineVersion;
    /**
     * @var string
     */
    public $expireDate;
    /**
     * @var string
     */
    public $expireStatus;
    /**
     * @var bool
     */
    public $isHotfixVersion;
    /**
     * @var string
     */
    public $minorVersion;
    /**
     * @var string
     */
    public $nodeType;
    /**
     * @var string
     */
    public $releaseNote;
    /**
     * @var string
     */
    public $releaseType;
    /**
     * @var string
     */
    public $statusDesc;
    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'communityMinorVersion' => 'CommunityMinorVersion',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'expireDate'            => 'ExpireDate',
        'expireStatus'          => 'ExpireStatus',
        'isHotfixVersion'       => 'IsHotfixVersion',
        'minorVersion'          => 'MinorVersion',
        'nodeType'              => 'NodeType',
        'releaseNote'           => 'ReleaseNote',
        'releaseType'           => 'ReleaseType',
        'statusDesc'            => 'StatusDesc',
        'tag'                   => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->communityMinorVersion) {
            $res['CommunityMinorVersion'] = $this->communityMinorVersion;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->expireStatus) {
            $res['ExpireStatus'] = $this->expireStatus;
        }

        if (null !== $this->isHotfixVersion) {
            $res['IsHotfixVersion'] = $this->isHotfixVersion;
        }

        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }

        if (null !== $this->releaseType) {
            $res['ReleaseType'] = $this->releaseType;
        }

        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['CommunityMinorVersion'])) {
            $model->communityMinorVersion = $map['CommunityMinorVersion'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['ExpireStatus'])) {
            $model->expireStatus = $map['ExpireStatus'];
        }

        if (isset($map['IsHotfixVersion'])) {
            $model->isHotfixVersion = $map['IsHotfixVersion'];
        }

        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }

        if (isset($map['ReleaseType'])) {
            $model->releaseType = $map['ReleaseType'];
        }

        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
